<?php

use Symfony\Component\HttpFoundation\File\UploadedFile;

class UsersController extends BaseController {

	public function file_get_contents_curl($url) { 
		$ch = curl_init(); 
	
		curl_setopt($ch, CURLOPT_HEADER, 0); 
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
		curl_setopt($ch, CURLOPT_URL, $url); 
	
		$data = curl_exec($ch); 
		curl_close($ch); 
	
		return $data; 
	}

	public function checkTelegramAuthorization($auth_data) {
		$BOT_TOKEN = '6916146487:AAFDKITC5oUw5xs-aRexOJLqtW7AdFjO1g4';
		$check_hash = $auth_data['hash'];
		unset($auth_data['hash']);
		$data_check_arr = [];
		foreach ($auth_data as $key => $value) {
			$data_check_arr[] = $key . '=' . $value;
		}
		sort($data_check_arr);
		$data_check_string = implode("\n", $data_check_arr);
		$secret_key = hash('sha256', $BOT_TOKEN, true);
		$hash = hash_hmac('sha256', $data_check_string, $secret_key);
		if (strcmp($hash, $check_hash) !== 0) {
			throw new Exception('Data is NOT from Telegram');
		}
		if ((time() - $auth_data['auth_date']) > 86400) {
			throw new Exception('Data is outdated');
		}
		return $auth_data;
	}

	public function registerTelegram() {
		try {
			$login = Input::get('username');
			if(!$login) return Response::json(array(), 401);

			$hash = Input::get('hash');
			if(!$hash) return Response::json(array(), 401);
			
			$auth_data = $this->checkTelegramAuthorization(Input::all());
			if(!$auth_data) return  Response::json(array('error' => 'bad data'), 401);

			$user = User::where('login', $login)->first();
			if(!$user) {
				$user = new User();
				$user->login = $login;
				$user->field_telegram = $login;
				$user->field_first_name = Input::get('first_name');

				if(Input::get('photo_url')) {
					//$fileRaw = $this->file_get_contents_curl(Input::get('photo_url')); 
					$fileRaw = file_get_contents(Input::get('photo_url'));
					//$file = new UploadedFile($fileRaw);

					$imgRaw = imagecreatefromstring( $fileRaw );
					if ($imgRaw !== false) {
						imagejpeg($imgRaw, storage_path().'/tmp/tmp.jpg',100);
						imagedestroy($imgRaw);
						$file = new UploadedFile( storage_path().'/tmp/tmp.jpg', 'tmp.jpg', 'image/jpeg',null,null,true);
						// DO STUFF WITH THE UploadedFile

						$uc = App::make('UploadsController');
						$uuc = App::make('UserUploadImagesController');

						$fileExt = $uc->getExtension($file);
						$uc->validate($file, $fileExt);
						$savedImage = $uuc->save($file, $fileExt);

						if($savedImage) {
							$user->field_image = $savedImage['fileName'];
						}
					}

				}

				$user->isTelegramRegister = true;
				$success = $user->save();
				if(!$success) return  Response::json(array('error' => 'saving error'), 401);
				//return $success ? 
				//	Response::json(array('result' => $success), 203)
				//	: Response::json(array('result' => $success), 500);
			} else {
				

				//Auth::user()->login($user);
				//return Response::json(array('result' => $user), 200);
			}

			Auth::user()->login($user);
			return Response::json(array('result' => $user), 200);

		} catch(Exception $e) {
			$data = array(
				'error' => $e->getMessage(),
			);
			return Response::json($data, 500);
		}

		//return Response::json(array('result' => $auth_data), 200);
	}

	public function register()
	{
		$redirect = Redirect::back();

		$hiddenAliases = array();
		$hiddenFields = UserField::where('hidden', true)->get();
		foreach ($hiddenFields as $field)
		{
			$hiddenAliases[] = 'field_' . $field->alias;
		}

		$input = count($hiddenAliases) > 0
			? call_user_func_array(array('Input', 'except'), $hiddenAliases)
			: Input::all();

		$user = new User($input);

		$user->active = Config::get('settings.system.free_registration');

		if (!$user->save())
		{
			// TODO isolate errors
			// TODO isolate input
			$redirect
				->withErrors($user->validator)
				->with('input', Input::except('_method', 'password', 'password_confirmation'));
		}
		elseif ($user->active)
		{
			// TODO success message
			Auth::user()->login($user);
			
			
			$userpage =  Config::get('settings.system.to_user_reg');
			if ($userpage) {
				$redirect = Redirect::intended('user');
			}
		}
		else
		{
			// TODO approval message
		}
		return Response::json($user);
		return $redirect;
	}

}

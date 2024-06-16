<?php

class User extends UserCustom {

	protected $table = TABLE_USER;

	protected $appends = array('user_purchased_objects', 'user_favorites');

	public $isTelegramRegister = false;

	protected function rules()
	{
		if($this->isTelegramRegister) return array('login' => 'required|unique:' . TABLE_USER . ',login,' . $this->id . '|regex:#^[a-z\\d]{3,}$#');
		$rules = array(
			'email' => 'required|unique:' . TABLE_USER . ',email,' . $this->id . '|email',
			'login' => 'required|unique:' . TABLE_USER . ',login,' . $this->id . '|regex:#^[a-z\\d]{3,}$#',
			'password' => 'min:7|confirmed',
		);

		if (!$this->id)
		{
			$rules['password'] .= '|required';
		}

		$fields = UserField::where('hidden', false)->get();

		foreach ($fields as $field)
		{
			if ($field->required && !in_array($field->fieldType->alias, array('options', 'pages')))
			{
				$rules['field_' . $field->alias] = 'required';
			}
		}

		return $rules;
	}

	public function getFieldUserFavoritesAttribute($value) {
		return explode(',', $value);
	}

	public function getUserFavoritesAttribute() {
		return $this->favorites()->select('id')->get();
	}

	public function getUserPurchasedObjectsAttribute() {
		return $this->purchasedObjects()->select('id')->get();
	}

	public function purchasedObjects() {
		return $this->belongsToMany('Page', 'guide__place$purchased_objects');
	}

	public function purchases() {
		//return $this->belongsToMany('Order', TABLE_ORDERS, 'user_id', 'id');
		return $this->hasMany('Order');//->where('is_paid', '1');
	}

	public function favorites() {
		return $this->belongsToMany('Page','guide__place$user_favorites');
	}

}

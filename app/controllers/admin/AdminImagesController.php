<?php

class AdminImagesController extends AdminFilesController {

	public $alias = 'images';

	protected $availableExtensions = array(
		'gif',
		'ico',
		'jpg',
		'png',
	);

	protected $storage = 'public/theme/images/';

	protected $webPath = '/site/theme/images/';

	public function edit($itemId)
	{
		if (!$this->exists($itemId))
		{
			App::abort(404);
		}

		return $this->view($this->alias . '.file', array(
			'item' => array(
				'id' => $itemId,
				'name' => $this->getName($itemId),
				'extension' => $this->getExtension($itemId),
				'path' => $this->webPath,
			),
			'items' => $this->getFiles(),
		));
	}

	public function deleteFiles($paths) {
		$paths = is_array($paths) ? $paths : func_get_args();

		$success = true;

		foreach ($paths as $path) { if ( ! @unlink($path)) $success = false; }

		return $success;
	}

	public function destroy($imgName) {

		$folders = ['source/', 'small/', 'medium/', 'large/'];
		$imagesPath = app('path.domain') . '/allow/public/data/images/';

		$pathsToDelete = array();

		foreach($folders as $folder) {
			$filePath = $imagesPath . $folder . $imgName;
			array_push($pathsToDelete, $filePath);
		}
		//return Response::json(array('data' => $pathsToDelete));
		$success = $this->deleteFiles($pathsToDelete);
		return $success ? 
			Response::json(array('data' => $pathsToDelete))
			: Response::json(array('data' => $pathsToDelete), 500);
		//
	}

}

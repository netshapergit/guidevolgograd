<?php

class AdminPageFilesController extends AdminFilesController {

    public function index() {
        return Response::json(array());
    }

    public function destroy($fileName) {
		$filesPath = app('path.domain') . '/allow/public/data/files/';

		$pathsToDelete = array();

        $filePath = $filesPath . $fileName;
        array_push($pathsToDelete, $filePath);
        
		$success = $this->deleteFiles($pathsToDelete);
		return $success ? 
			Response::json(array('data' => $pathsToDelete))
			: Response::json(array('data' => $pathsToDelete), 500);
		//
	}

}
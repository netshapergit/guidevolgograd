<?php

// TODO replace some methods and properties to AdminResourceController
abstract class AdminModelController extends AdminResourceController {

	protected $modelName;
	

	public function index()
	{
		return $this->view('list', array(
			'actions' => $this->getActions(),
			'columns' => $this->getColumns(),
			'items' => $this->getItems(Input::get('sort', 'id'), Input::get('desc'))->toArray(),
			'text' => $this->getText(),
		));
	}

	public function create()
	{
		return $this->view($this->alias . '.form', array(
			'actions' => $this->getActions(),
			'list' => $this->getListData(),
			'text' => $this->getText(),
		));
	}

	public function store()
	{
		$item = $this->findItem();

		$success = $item->save();

		switch (Request::format())
		{
			case 'json':
				return $success
					? Response::json(array(
						'item' => $item
					))
					: App::abort(400, $item->validator->messages());
				break;

			default:
				return $success
					? Redirect::to(URL_ADMIN . '/' . $this->alias . '/' . $item->id . '/edit')
					: Redirect::to(URL_ADMIN . '/' . $this->alias . '/create')
						->withErrors($item->validator)
						->with('input', Input::except('_method'));
		}
	}

	public function edit($itemId)
	{
		return $this->view($this->alias . '.form', array(
			'actions' => $this->getActions(),
			'item' => $this->findItem($itemId)->toArray(),
			'list' => $this->getListData($itemId),
			'text' => $this->getText(),
		));
	}

	public function update($itemId)
	{
		$item = $this
			->findItem($itemId)
			->fill(Input::all());

		$success = $item->save();

		switch (Request::format())
		{
			case 'json':
				return $success
					? Response::json(array(
						'item' => $item,
					))
					: App::abort(400, json_encode(array(
						'errors' => $item->validator->messages(),
						'item' => $this->findItem($item->id),
					)));

			default:
				$redirect = Redirect::to(URL_ADMIN . '/' . $this->alias . '/' . $itemId . '/edit');

				if (!$success)
				{
					$redirect
						->withErrors($item->validator)
						->with('input', Input::except('_method'));
				}

				return $redirect;
		}
	}

	public function deleteFiles($paths) {
		$paths = is_array($paths) ? $paths : func_get_args();

		$success = true;

		foreach ($paths as $path) { if ( ! @unlink($path)) $success = false; }

		return $success;
	}

	public function deletePageImages($page) {
		$folders = ['source/', 'small/', 'medium/', 'large/'];
		$imagesPath = app('path.domain') . '/allow/public/data/images/';
		//$img = 'R6hX.jpg';
		

		//$page = Page::find(1514);
		$pageFields = $page->layout->fields->toArray();

		$imgFields = array_values(array_filter($pageFields, function($v) {
			return $v['field_type_id'] == 29;
		}));

		$pageImgs = array();

		foreach($imgFields as $imgField) {
			if($page['field_' . $imgField['alias']]) {
				array_push($pageImgs, $page['field_' . $imgField['alias']]);
			}
		}

		$pathsToDelete = array();

		foreach($pageImgs as $pageImg) {
			foreach($folders as $folder) {
				$filePath = $imagesPath . $folder . $pageImg;
				array_push($pathsToDelete, $filePath);
			}
		}

		$this->deleteFiles($pathsToDelete);
		return;
		//return Response::json(array('data' => $pathsToDelete));
	}

	
	function array_flatten($a, $flat = []) {
		$entry = [];
		foreach ($a as $key => $el) {
			if (is_array($el)) {
				$flat = array_flatten($el, $flat);
			} else {
				$entry[$key] = $el;
			}
		}
		if (!empty($entry)) {
			$flat[] = $entry;
		}
		return $flat;
	}
/**/
	public function deleteAllPageImages($page) {
		$folders = ['source/', 'small/', 'medium/', 'large/'];
		$imagesPath = app('path.domain') . '/allow/public/data/images/';

		$pageImgs = [];

		foreach($page->toArray() as $field) {
			if($field && !is_array($field)) {
				preg_match_all('/[\w-]+\.(jpg|png|jpeg)/', $field, $matches);
				if(count($matches[0])) {
					array_push($pageImgs, array_values(array_unique($matches[0])));
				}
			}
		}

		$pathsToDelete = array();

		foreach(array_flatten($pageImgs) as $pageImg) {
			foreach($folders as $folder) {
				$filePath = $imagesPath . $folder . $pageImg;
				array_push($pathsToDelete, $filePath);
			}
		}
		
		$this->deleteFiles($pathsToDelete);

		return;
	}

	public function destroy($itemId)
	{
		$item = $this->findItem($itemId, false);

		if ($item) {
			if($this->modelName == 'Page') {
				$this->deleteAllPageImages($item);
			}
			$item->delete();
		}

		switch (Request::format())
		{
			case 'json':
				return Response::json();
			default:
				return Redirect::to(URL_ADMIN . '/' . $this->alias);
		}
	}

	protected function getItems($orderBy = 'id', $desc = false)
	{
		$modelName = $this->modelName;

		$query = $modelName::orderBy($orderBy, $desc ? 'desc' : 'asc');

		$with = $this->with();

		if ($with)
		{
			call_user_func_array(array($query, 'with'), $with);
		}

		$this->itemsQuery($query);

		return $query->get();
	}

	protected function itemsQuery($query)
	{}

	protected function findItem($itemId = null, $orFail = true)
	{
		$modelName = $this->modelName;

		if (!$itemId)
		{
			return new $modelName(Input::all());
		}

		$with = $this->with($itemId);

		if ($with)
		{
			$query = call_user_func_array(array($modelName, 'with'), $with);

			return $orFail ? $query->findOrFail($itemId) : $query->find($itemId);
		}

		return $orFail ? $modelName::findOrFail($itemId) : $modelName::find($itemId);
	}

	protected function with($itemId = null)
	{
		return array();
	}

	protected function getListData($itemId = null)
	{
		return array();
	}

	protected function getText()
	{
		return array(
			'formHeader' => '',
			'listHeader' => 'Список',
		);
	}

	protected function getActions()
	{
		return array(
			'create' => $this->allowCreate(),
			'edit' => $this->allowEdit(),
			'delete' => $this->allowDelete(),
		);
	}

	protected function allowCreate()
	{
		return true;
	}

	protected function allowEdit()
	{
		return true;
	}

	protected function allowDelete()
	{
		return true;
	}

	protected function getColumns()
	{
		return array(
			array('alias' => 'id', 'label' => 'ID'),
		);
	}

}

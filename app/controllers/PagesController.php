<?php

class PagesController extends BaseController {

	public function show()
	{
		$domain = Domain::current();

		if (!$domain->active)
		{
			return 'Domain blocked';
		}

		if (!Meta::page())
		{
			App::abort(404);
		}

		if (Meta::page()->field_is_payment_required == '1') {
			$user = Auth::user()->get();
			$parentPage = Page::find(Meta::page()->parent_page_id);

			if(!$user) {
				if($parentPage) return Redirect::to($parentPage->path . '?login=yes');
				return Redirect::to('/?login=yes');
			}

			$userPucrchasedObjectsIds = array_map(function($v) {
				return $v['id'];
			}, $user->purchasedObjects()->get()->toArray());
			$isPaid = in_array(Meta::page()->id, $userPucrchasedObjectsIds);
			
			if(!$isPaid) {
				if($parentPage) return Redirect::to($parentPage->path . '?bo=' . Meta::page()->id);
				return Redirect::to('/' . '?bo=' . Meta::page()->id);
			}
		}

		// TODO replace code below with showNew()

		if ($domain->actual)
		{
			return $this->showNew();
		}

		// domain is not actual

		$modules = Module::with('layouts', 'moduleType', 'moduleTypeLayout', 'pages', 'position')
			->where('active', 1)
			->get();

		$blocks = array();

		foreach (Position::all() as $position)
		{
			$blocks[$position->alias] = array(
				'modules' => array(),
				'position' => $position,
			);
		}

		$modules = $modules
			->sortBy('order')
			->filter(function($module)
			{
				return $module->active
					&& $module->position
					&& $module->position->active
					&& $module->moduleType->active
					&& $module->moduleType->isAvailable()
					&& $module->isAvailable();
			});

		foreach ($modules as $module)
		{
			$blocks[$module->position->alias]['modules'][] = $module;
		}

		foreach ($blocks as &$block)
		{
			$rows = Module::calculateRows($block['modules']);

			$block['rows'] = array();

			foreach ($rows as $row)
			{
				$renders = array();

				foreach ($row as $module)
				{
					$moduleWrappedView = View::make('_.module', array(
						'content' => $module->content,
						'module' => $module,
					));

					$renders[] = $moduleWrappedView->render();
				}

				$block['rows'][] = $renders;
			}

			$block['content'] = View::make('_.position', $block)->render();
			$block['length'] = count($block['modules']);
			unset($block['modules']);
			unset($block['rows']);
		}

		return View::make('layouts.' . Meta::page()->layout->alias, array(
			'modules' => $blocks,
			'page' => Meta::page(),
			'request' => Meta::request(),
			'site' => Config::get('settings.site'),
			'system' => Config::get('settings.system'),
			'user' => Auth::user()->get(),
		));
	}

	public function showNew()
	{
		return View::make('base', array(
			'dummy' => Module::loadDummy(Meta::page(), true),
			'page' => Meta::page(),
			'positions' => Position::loadNested(Meta::page(), true),
			'request' => Meta::request(),
			'site' => Config::get('settings.site'),
			'system' => Config::get('settings.system'),
		));
	}

	public function getCities() {
		$cities = Page::where('layout_id', '7')->get();
		return Response::json($cities);
	}

	public function getPages() {
		$data = array();

		$pages = Page::query();

		if(count(Input::get('filter')) && is_array(Input::get('filter'))) {
			foreach(Input::get('filter') as $key => $value) {
				$param = array_map(function($v) {
					return trim($v);
				}, explode(",", $value));
				$pages->whereIn($key, $param);
			}
		}

		if(Input::has('select')) {
			$selects = array_map(function($v) {
				return trim($v);
			}, explode(",", Input::get('select')));
			foreach($selects as $value) {
				$pages->select($selects);
			}
		}

		$data['count'] = $pages->count();
		$data['input'] = Input::all();
		$data['data'] = $pages->get();
		return Response::json($data);
	}

	public function getCitiesData() {
		$data = array();

		$selects = array('id', 'alias', 'field_header', 'parent_page_id', 'layout_id', 'order', 'field_coords');

		$catsLayouts = array(16, 35, 36, 37, 38, 39, 40, 54);

		$pages = Page::where('layout_id', '7')
			->select($selects)
			->with(array('subPages' => function($q) use($catsLayouts, $selects) {
				$q->whereIn('layout_id', $catsLayouts);
				$q->select($selects);
			}));

		$data['data'] = $pages->get();
		return Response::json($data);
	}

	public function getPage($pageId) {
		$data = array();

		//$selects = array('id', 'alias', 'field_header', 'parent_page_id', 'layout_id', 'order', 'field_image', 'field_price');

		$pages = Page::where('id', $pageId);

		if(Input::has('select')) {
			$selects = array_map(function($v) {
				return trim($v);
			}, explode(",", Input::get('select')));
			foreach($selects as $value) {
				$pages->select($selects);
			}
		}

		if(Input::has('with')) {
			$withs = array_map(function($v) {
				return trim($v);
			}, explode(",", Input::get('with')));
			
			$pages->with($withs);
		}


		$data['input'] = Input::all();
		$data['data'] = $pages->first();
		return Response::json($data);
	}

}

<?php

use \Illuminate\Database\Eloquent\Collection;

// TODO find better way instead of PageCustom
class Page extends PageCustom {

	const MAX_DEPTH = 32;

	protected $table = TABLE_PAGE;

	protected $hidden = ['field_yookassa_shopid', 'field_yookassa_secret'];

	protected $appends = array('sub_pages_count');

	public $additionalFields = array(
		'path',
	);

	public static function boot() {
        
		parent::boot();

		static::updating(function($page) {
			if ($page->isDirty('field_tts_text')) {
				//print_r('aaaa');
				$page->field_tts_audio = App::make('ApiTTSController')->getTTS($page->field_tts_text, true, 'p' . $page->id . '_' . Str::random(4));
				//doSomething();
			}

			if ($page->isDirty('field_tts_object')) {
				//print_r('aaaa');
				$obj = array();
				$page->field_summary = json_encode(json_decode($page->field_tts_object, true));
				if(json_decode($page->field_tts_object, true)) {
					$original = $page->getOriginal('field_tts_object');
					$originalObj = array();

					if(is_array(json_decode($original, true))) {
						$originalObj = json_decode($original, true);
					}
					
					$obj = json_decode($page->field_tts_object, true);

					$result = array(); 
					//foreach($originalObj as $origObj) {
						
					foreach($obj as $ob) {

						$ok = array_search($ob['id'], array_column($originalObj, 'id'));

						if($ok) {
							if($originalObj[$ok]['text'] !== $ob['text']) {
								$ob['audio'] = App::make('ApiTTSController')->getTTS($ob['text'], true, 'p' . $page->id . '_' . $ob['id']);
								array_push($result, $ob);
							} else {
								array_push($result, $ob);
							}
						} else {
							$ob['audio'] = App::make('ApiTTSController')->getTTS($ob['text'], true, 'p' . $page->id . '_' . $ob['id']);
							array_push($result, $ob);
						}
					}
					//}

					$page->field_tts_object = json_encode($result, JSON_UNESCAPED_UNICODE);
					//$page->field_tts_object = App::make('ApiTTSController')->getTTS($page->field_tts_text, true, 'p' . $page->id . '_' . Str::random(4));

				}
				
				
				//doSomething();
			}
			
			//return false;
			//$page['field_tts_audio'] = 'vierfr';
			//return $page;
			//return false;
		});

		
		
    }

	//protected $appends = ['fields'];

	public function getFieldCitiesIdsAttribute($value) {
		if(!$value) return array();
		return explode(',', $value);
	}

	public function getSubPagesCountAttribute() {
		//if(!$value) return array();
		return $this->subPages()->count();
	}

	public function parentPage()
	{
		return $this->belongsTo('Page');
	}

	public function layout()
	{
		return $this->belongsTo('Layout');
	}

	public function getFieldsAttribute()
	{
		return $this->layout->fields;
	}

	public function subPages()
	{
		return $this->hasMany('Page', 'parent_page_id');
	}

	public function modules()
	{
		return $this->belongsToMany('Module', TABLE_PAGE_OF_MODULE);
	}

	public function object()
	{
		return $this->belongsTo('Page', 'field_object_id');
	}

	protected function rules()
	{
		$rules = array(
			'parent_page_id' => $this->alias ? 'required|' : '' . 'integer|exists:' . TABLE_PAGE . ',id',
			'layout_id' => 'required|integer|exists:' . TABLE_LAYOUT . ',id',
			'alias' => 'regex:#^[a-z\\d\\-]*$#',
			'order' => 'numeric',
		);

		if ($this->layout)
		{
			foreach ($this->layout->fields as $field)
			{
				if ($field->pivot->required && !in_array($field->fieldType->alias, array('options', 'pages')))
				{
					$rules['field_' . $field->alias] = 'required';
				}
			}
		}

		return $rules;
	}

	public function getActiveSubPagesAttribute()
	{
		return $this->subPages
			->filter(function($page)
			{
				return $page->isAvailable(null, false);
			});
	}

	public function getParentsAttribute()
	{
		$pages = array();

		$page = $this;

		$counter = 0;

		do
		{
			$pages[] = $page;

			$page = $page->parentPage;

			if (++$counter > Page::MAX_DEPTH)
			{
				throw new Error('Recursive path for page ID ' . $this->id);
			}
		}
		while($page);

		return new Collection(array_reverse($pages));
	}

	public function getPathAttribute()
	{
		$path = '';

		foreach ($this->parents->reverse() as $page)
		{
			if ($page->alias)
			{
				$path = '/' . $page->alias . $path;
			}
		}

		return $path ?: '/';
	}

	public function isAvailable(User $user = null, $nested = true)
	{
		if (!$user)
		{
			$user = Auth::user()->get();
		}

		$available = true;

		$pages = $nested ? $this->parents : array($this);

		foreach ($pages as $page)
		{
			if (!$page->active
				|| $page->access_level == 'guest' && $user
				|| $page->access_level == 'user' && !$user
			) {
				$available = false;
				break;
			}
		}

		return $available;
	}

	public static function findByPath($path)
	{
		$user = Auth::user()->get();

		$path = trim($path, '/');
		$segments = $path ? explode('/', $path) : array();
		array_unshift($segments, '');

		$page = null;
		do
		{
			$alias = array_shift($segments);

			$query = Page::where('alias', $alias)->where('active', true);

			if ($page)
			{
				$query->where('parent_page_id', $page->id);
			}
			else
			{
				$query->whereNull('parent_page_id');
			}

			if (count($segments) === 0)
			{
				$query->with('layout');
			}

			$page = $query->first();

			if ($page && !$page->isAvailable($user, false)) {
				$page = null;

				// TODO
//				App::abort(403);
			}
		}
		while ($page && count($segments) > 0);

		return $page;
	}

}

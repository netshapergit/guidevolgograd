<?php

// TODO Page::with()
class AdminPagesNewController extends AdminModelController {

    public $selects = array('field_header', 'id', 'alias', 'layout_id', 'parent_page_id', 'active');

    public function index() {
        $data = Page::query();

        $depth = intval(Config::get('settings.system.depth'));

        $selects = $this->selects;

        if(Input::get('query')) {
            $queryString = Input::get('query');
            //$data = $data->where('field_header', 'like', '%' . $queryString . '%');
            $data = $data->where(function($query) use($queryString) {
                $query->where('field_header', 'like', '%' . $queryString . '%')
                    ->orWhere('alias', 'like', '%' . $queryString . '%')
                    ->orWhere('id', 'like', '%' . $queryString . '%');
            });
        }

        if(Input::get('cat')) {
            $cat = Input::get('cat');
            $data = $data->where('parent_page_id', $cat);
        }

        if(Input::get('layout')) {
            $layout = Input::get('layout');
            $data = $data->where('layout_id', $layout);
        }

        // print_r(Input::all());
        if(!Input::get('query') && !Input::get('layout') && !Input::get('structure')) {
            $data = $data
                ->where('parent_page_id', null);
            if($depth > 0) {
                $data = $data
                    ->with(array('subPages' => function($q) use($selects, $depth) {
                        if($depth > 1) {
                            $q->with(array('subPages' => function($qq) use($selects) {
                                $qq->with(array('layout' => function($c) {
                                    $c->select('id', 'name');
                                }));
                                $qq->select($selects);
                            }));
                        }
                        
                        
                        $q->with(array('layout' => function($q) {
                            $q->select('id', 'name');
                        }));
                        $q->select($selects);
                    }));
            }
        }
        
        if(Input::get('structure') == '1') {
            //$data = $data->where('layout.structure', '1');
            $data = $data->whereHas('layout', function($q) {
                $q->where('structure', 1);
            });
        }

        if(Input::get('select')) {
            //$data = $data->where('layout.structure', '1');
            $data = $data->select(explode(',', Input::get('select')));
        } else {
            $data = $data->select($selects);
        }

        $data = $data   
            ->orderBy('created_at', 'asc')
            ->with(array('layout' => function($q) {
                $q->appends = array();
                $q->select('id', 'name', 'structure');
            }))
            ->paginate(50)
            ->toArray();

        //$data['layouts'] = Layout::select('id', 'name')->get();

        switch (Request::format()) {
			case 'json':
				return Response::json($data);
				break;

			default:
				return Input::get('json') ? Response::json($data)
                    : $this->view('adminV2.pages', array());
		}
	}

    public function show($itemId) {
        $page = Page::where('id', $itemId)->with(array('layout' => function($q) {
            $q->select('id', 'name');
            $q->with(array('fields' => function($f) {
                $f->select('id', 'field_type_id', 'name', 'alias');
                $f->with(array('fieldType' => function($ft) {
                    $ft->select('id', 'alias');
                }, 'selects' => function($f) {
                    $f->select('id', 'name');
                }, 'selects.options' => function($f) {
                    $f->select('id', 'select_id', 'name');
                }));
                //$f->select('');
            }));
        }, 'parentPage' => function($q) {
            $q->select('id', 'field_header', 'alias', 'parent_page_id');
        }))->first()->toArray();
        
        switch (Request::format()) {
			case 'json':
				return $page ? 
                    Response::json($page)
                    : Response::json(array(), 404);
				break;

			default:
				return $page ? 
                    $this->view('adminV2.page', array())
                    : App::abort(404);
		}
    }

    public function create() {

        $page = array();

        switch (Request::format()) {
			case 'json':
				return Response::json($page);
				break;
			default:
                return $this->view('adminV2.page_new', array());
		}
    }

    public function store() {

        $page = new Page();
        $page->fill(Input::all());

        $success = $page->save();

        switch (Request::format()) {
			case 'json':
				return $success ? 
                    Response::json($page)
                    : Response::json(array(), 404);
				break;

			default:
				return $success ? 
                    $this->view('adminV2.page', array())
                    : App::abort(404);
		}
    }

    public function update($itemId) {
        $page = Page::find($itemId);
        if(!$page) return Response::json(array(), 404);

        $page->fill(Input::all());
        $success = $page->save();

        return $success ? 
            Response::json($page)
            : Response::json(array(), 500);
    }

    public function getLayouts() {
        $data = Layout::select('id', 'name', 'structure');


        if(Input::get('fields') == '1') {
            $data = $data->with(array('fields' => function($f) {
                $f->select('id', 'field_type_id', 'name', 'alias');
                $f->with(array('fieldType' => function($ft) {
                    $ft->select('id', 'alias');
                }, 'selects' => function($f) {
                    $f->select('id', 'name');
                }, 'selects.options' => function($f) {
                    $f->select('id', 'select_id', 'name');
                }));
                //$f->select('');
            }));
        }

        return Response::json($data->get());
    }

    public function subPagesById() {
        $id = Input::get('id');

        $selects = $this->selects;

        $page = Page::find($id);

        $data = $page
                ->subPages()
                ->select($selects)
                ->with(array('layout' => function($q) use($selects) {
                    $q->appends = array();
                    $q->select('id', 'name');
                }))
                ->paginate(50)
                ->toArray();

        return Response::json($data);
    }

}
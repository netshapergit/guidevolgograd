<?php

class Api2GISController extends BaseController {

    public function search() {
        $data = array();
        $pageNumber = Input::get('page');
        $search = Input::get('search');
        $url = 'https://catalog.api.2gis.com/3.0/items?q=' . $search . '&key=c501f175-691d-44fa-a109-0dff81eb394a&fields=items.point,items.full_address_name,items.reviews,items.links,items.external_content,items.rubrics,items.flags,items.description,items.alias,items.schedule&page_size=10&page=' . $pageNumber;

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);

        $res = curl_exec($ch);
        curl_close($ch);

        return Response::json(json_decode($res, true));
    }

    public function create2() {
        $data = array();

        $user = Auth::user()->get();

        $gis_id = Input::get('field_2gis_id');

        $page = Page::where('field_2gis_id', $gis_id)->first();
        if($page) {
            return Response::json(array('error' => array('message' => 'Уже есть страница с таким 2gis_id')), 403);
        }

        //$parentPage = Page::where('layout_id', Input::get('layout_id'))

        $page = new Page();

        
        $page['alias'] = Input::get('alias');
        $page['parent_page_id'] = Input::get('parent_page_id');
        $page['layout_id'] = Input::get('layout_id');
        $page['title'] = Input::get('field_header');

        $page['field_header'] = Input::get('field_header');
        $page['field_2gis_id'] = $gis_id;
        $page['field_coords'] = Input::get('field_coords');
        //$page['user_id'] = $user['id'];
        
        $success = $page->save();
        return $success ? 
            Response::json($page)
            : Response::json(array(), 500);

        return Response::json(json_decode($page, true));
    }

    public function create() {
        $data = array();

        $user = Auth::user()->get();

        if(count(Input::get('items')) == 0) return Response::json(array('error' => array('message' => 'Передан пустой массив объектов')), 403);

        $results = array();

        foreach(Input::get('items') as $item) {
            $page = Page::where('field_2gis_id', $item['field_2gis_id'])->first();
            if($page) {
                array_push($results, array('error' => array('message' => $item['field_2gis_id'] . ': Ошибка: Уже есть страница с таким 2GIS ID')));
            } else {
                $page = new Page();

                $page['parent_page_id'] = Input::get('parent_page_id');
                $page['layout_id'] = Input::get('layout_id');

                $page['alias'] = $item['alias'];
                $page['title'] = $item['field_header'];

                $page['field_header'] = $item['field_header'];
                $page['field_2gis_id'] = $item['field_2gis_id'];
                $page['field_coords'] = $item['field_coords'];
                $page['field_address'] = $item['field_address'];
                $page['field_cities_ids'] = $item['field_cities_ids'];
                $page['field_content'] = $item['field_summary'];
                $page['field_schedule'] = $item['field_schedule'];
                $page['field_object_category_id'] = $item['field_object_category_id'];

                $success = $page->save();

                $success ?
                    array_push($results, $page)
                    : array_push($results, array('error' => array('message' => $item['field_2gis_id'] . ': Ошибка сохранения')));
            }
        }
        
        //$page['user_id'] = $user['id'];
        
        //$success = $page->save();

        $data['input'] = Input::all();

        return true ? 
            Response::json($results)
            : Response::json(array(), 500);

        //return Response::json(json_decode($page, true));
    }

}

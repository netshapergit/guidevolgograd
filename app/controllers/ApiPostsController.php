<?php

class ApiPostsController extends BaseController {

    public function all() {
        $data = array();

        $items = Page::where('layout_id', '56')
            ->orderBy('field_event_date', 'desc')
            ->select('id', 'field_tags', 'field_address', 'field_is_img_bg', 'field_tickets_link','field_cities_ids', 'created_at', 'field_header', 'field_gallery', 'field_event_date', 'field_content', 'field_image', 'field_object_id')
            ->with('object')
            ->take(50)
            ->get()
            ->toArray();
        
        if(Input::has('city')) {
            $items = array_filter($items, function($v) {
                return in_array(Input::get('city'), $v['field_cities_ids']);
            });
        }

        $data['items'] = $items;

        $data['cities'] = Page::where('layout_id', '7')
            ->select('id', 'field_header')
            ->get();

        return Response::json($data);
    }

}

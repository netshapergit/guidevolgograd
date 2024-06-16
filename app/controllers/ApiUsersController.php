<?php

class ApiUsersController extends BaseController {

    public function all() {
        $data = array();

        $items = User::with(array('purchases'))->get();
        
        $data['items'] = $items;

        return Response::json($data);
    }

    public function me() {
        $user = Auth::user()->get();
        if(!$user) return Response::json(array(), 401);

        return Response::json($user);
    }

    public function addOrRemoveFavorite() {
        $user = Auth::user()->get();
        if(!$user) return Response::json(array(), 401);
        $user = User::find($user['id']);
        //print_r($user);
        $page = Page::find(Input::get('page_id'));
        if(!$page) return Response::json(array('msg' => Input::get('page_id')), 404);
        
        if($user->favorites->contains($page['id'])) {
            $user->favorites()->detach($page['id']);
        } else {
            $user->favorites()->attach($page['id']);
        }

        /*
        $favs = $user->favorites();

        if(!$favs) {
            $favs = array($page['id']);
        } else {
            //$favs = explode(',', $favs);
            $addedFav = array_search($page['id'], $favs);
            if($addedFav !== false) {
                $favs = array_filter($favs, function($v) use($page) {
                    return $v != $page['id'];
                });
            } else {
                array_push($favs, $page['id']);
            }
        }

        $user['field_user_favorites'] = implode(',', $favs);
        print_r($user['field_user_favorites']);
        $success = $user->save();
        */
        $success = true;
        return $success ? 
            Response::json($user)
            : Response::json(array('data' => $user['field_user_favorites']), 500);
    }

    public function getFavorites() {
        $user = Auth::user()->get();
        if(!$user) return Response::json(array(), 401);
        //\DB::enableQueryLog();
        $data = User::find($user['id']);
        //dd(\DB::getQueryLog());

        //print_r($data);

        $pages = $data->favorites()->with(array('parentPage' => function($q) {
            $q->select('id', 'parent_page_id', 'alias');
            $q->with(array('parentPage' => function($g) {
                $g->select('id', 'alias', 'layout_id', 'field_header');
            }));
        }))->get();

        return Response::json($pages);

        return Response::json($data->favorites);
    }

}

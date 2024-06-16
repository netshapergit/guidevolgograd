<?php

class ApiRoutesController extends BaseController {

    public function test() {
        $data = RouteItem::all();

        
        

        return Response::json($data);
    }

    public function create() {
        $user = Auth::user()->get();
        if(!$user) return Response::json(array(), 401);

        $data = Input::get('data');

        $routeItem = new RouteItem();
        $routeItem->user_id = $user['id'];
        $routeItem->data = json_encode($data);

        $success = $routeItem->save();

        return $success ?
            Response::json($routeItem)
            : Response::json(array(), 500);
    }

    public function update($id) {
        $user = Auth::user()->get();
        if(!$user) return Response::json(array(), 401);

        $data = Input::get('data');

        $routeItem = RouteItem::where('id', $data['id'])->where('user_id', $user['id'])->first();
        if(!$routeItem) return Response::json(array(), 404);
        
        $routeItem->data = json_encode($data);

        $success = $routeItem->save();

        return $success ?
            Response::json($routeItem)
            : Response::json(array(), 500);
    }

    public function my() {
        $user = Auth::user()->get();
        if(!$user) return Response::json(array(), 401);

        $data = RouteItem::where('user_id', $user['id'])->get();

        return Response::json($data);
    }

}
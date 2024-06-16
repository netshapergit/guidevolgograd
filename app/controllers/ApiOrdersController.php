<?php

class ApiOrdersController extends BaseController {

    public function all() {
        $data = array();

        $items = Order::all();
        //$items = Order::with('user', 'page')->get();
        
        $data['items'] = $items;

        return Response::json($data);
    }

    public function create() {
        $user = Auth::user()->get();
        if(!$user) return Response::json(array(), 401);

        $page = Page::find(Input::get('page_id'));
        if(!$page) return Response::json(array(), 404);

        $order = Order::where('user_id', $user['id'])->where('page_id', $page['id'])->first();
        
        if(!$order) {
            $order = new Order;
            $order->user_id = $user['id'];
            $order->page_id = $page['id'];

            $order->save();
        }

        if($order->is_paid == '1') return Response::json(array(), 500);

        $payment = App::make('YookassaController')->createPayment($order["id"], $page['field_price']);

        $order->payment = json_encode($payment);
        $order->save();

        return Response::json(array('order' => $order, 'payment' => $payment));
    }

}

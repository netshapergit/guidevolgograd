<?php


class YookassaController extends BaseController {

    public function createRequest($userShop, $orderId, $amount) {
        $ch = curl_init();

        $payload = json_encode(array(
            "amount" => array(
                "value" => $amount,
                "currency" => "RUB"    
            ),
            "confirmation" => array (
            "type" => "embedded"
            ),
            "capture" => true,
            "metadata" => array(
                "oid" => $orderId,
                "sid" => $userShop["id"]
            ),
            "description" => "Заказ №" . $orderId
        ));
        
        $headers = array(
            'Content-type: application/json',
            'Idempotence-Key:' . Str::random(64)
        ); 
        
        $yookassa = $userShop["field_yookassa_shopid"] . ":" . $userShop["field_yookassa_secret"];

        curl_setopt($ch, CURLOPT_URL,'https://api.yookassa.ru/v3/payments');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_USERPWD, $yookassa); //"900768:test_afHuRABND2I288dyGduc3sMrra3J-uK5IeslqqLqKW8"
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        $server_output = curl_exec($ch);
        return json_decode($server_output, true);
    }

    public function createPayment($orderId, $amount) {
        $userShop = Page::find(1);
        $date = new DateTime();
        if(!$userShop) return Response::json($this->newError('shop is not found', 'logicError'), 404);

        $request = $this->createRequest($userShop, $orderId, $amount);
        return $request;
    }

    public function paymentModelToObject($model) {
        $json_data = array();
        if(json_decode($model["json_data"], true) != null) $json_data = json_decode($model["json_data"], true);
        $model["json_data"] = $json_data;
        return $model;
    }

    public function validateIP($ip) {
        $wlist = [
            '185.71.76.0/27',
            '185.71.77.0/27',
            '77.75.153.0/25',
            '77.75.156.11',
            '77.75.156.35',
            '77.75.154.128/25',
            '2a02:5180::/32'
        ];
        return in_array($ip, $wlist);
    }

    public function userwebhook() {
        //if (!$this->validateIP(Request::ip())) return Response::json(array("data" => null, "error" => "Bad IP"), 401);
        
        $data = json_decode(Request::getContent(), true);

        if($data['type'] == "notification" && $data['event'] == "payment.succeeded") {
            $obj = $data['object'];
            $userShop = Page::find($obj['metadata']['sid']);
            if(!$userShop) return Response::json(array("data" => $ip, "error" => "Bad shop id"), 404);

            //$paymentModel = Payment::where("payment_id", $obj["id"])->first();
            //if(!$paymentModel) return Response::json($this->newError('payment is not found', 'logicError'), 404);
            //$paymentModel->status = 'succeeded';
            //$paymentModelSavingStatus = $paymentModel->save();
            //if($paymentModelSavingStatus) {
                $orderModel = Order::where("id", $obj["metadata"]["oid"])->first();
                if(!$orderModel) return Response::json($this->newError('order is not found', 'logicError'), 404);
                $orderModel->status = Order::$STATUSES["PAYMENT_SUCCEED"];
                $orderModel->save();
                return Response::json(array("data" => $orderModel), 200);
            //}
            
        }

        return Response::json(array("data" => $paymentModel), 200);
    }

    public function payBalance() {
        $amount = Input::get('amount');
        $user = Auth::user()->get();
        $homepage = Page::find(1);
        $userShop = Page::where('user_id', $user->id)->where('active', true)->where('layout_id', 12)->first();
        $date = new DateTime();
        $orderId = $date->getTimestamp();

        if($user && $amount) {
            
            $userModel = User::find($user->id);

            $ch = curl_init();

            $payload = json_encode(array(
                "amount" => array(
                    "value" => $amount,
                    "currency" => "RUB"    
                ),
                "confirmation" => array (
                "type" => "embedded"
                ),
                "capture" => true,
                "metadata" => array(
                    "oid" => $orderId,
                    "sid" => $userShop->id
                ),
                "description" => "Пополнение баланса " . $orderId
            ));
            
            $headers = array(
                'Content-type: application/json',
                'Idempotence-Key:' . Str::random(64)
            );
            
            $yookassa = $homepage["field_yookassa_shopid"] . ":" . $homepage["field_yookassa_secret"];
    
            curl_setopt($ch, CURLOPT_URL,'https://api.yookassa.ru/v3/payments');
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_USERPWD, $yookassa); //"900768:test_afHuRABND2I288dyGduc3sMrra3J-uK5IeslqqLqKW8"
            curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            
            $server_output = curl_exec($ch);
            
            if(json_decode($server_output, true)["confirmation"]) {

                $userPayments = array();

                if(json_decode($user->field_pending_payments, true) != null) {
                    $userPayments = json_decode($user->field_pending_payments, true);
                }

                array_push($userPayments, json_decode($server_output, true));
                //print_r($userPayments);
                $user->field_pending_payments = json_encode($userPayments);
                //$userModel->field_userpayments = '100';
                //print_r($user->field_payments);
                //print_r($user);
                $user->save();
                //print_r($success);
            }

            print_r($server_output);
        }
    }

    public function webhook2() {

        $data = json_decode(Request::getContent(), true);
        
        if($data['type'] == "notification" && $data['event'] == "payment.succeeded") {
            //$date = new DateTime();
            //$tsDate = $date->getTimestamp();
            $obj = $data['object'];

            $order = Order::find($obj['metadata']['oid']);
            $user = User::find($obj['metadata']['sid']);
            
            if(!$order) return Response::json(array(), 404);

            $order['is_paid'] = '1';
            $order['payment'] = json_encode($data);

            $user = User::find($order['user_id']);
            $user->purchasedObjects()->attach($order['page_id']);

            $success = $order->save();
            return $success ? 
                Response::json(array())
                : Response::json(array(), 500);
        }
    }

    public function getUserPayments() {
        $user = Auth::user()->get();

        $userPayments = array();

        if(json_decode($user->field_payments, true) != null) {
            $userPayments = json_decode($user->field_payments, true);
        }

        return Response::json([
            "data" => $userPayments
        ], 200);
    }

    public function computeMonthPrice($price, $date) {
        $computedPrice = $price;
 
        print_r($computedPrice);
    }

    public function planpayment() {
        $planId = Input::get('planid');
        $homepage = Page::find(1);
        $plans = json_decode($homepage->field_plans_json, true);
        $planIndex = array_search($planId, array_column($plans, 'id'));
 
        //print_r($planIndex);
 
        $date = new DateTime();
        $tsDate = $date->getTimestamp();

        $user = Auth::user()->get();

        $success = false;

        if($planIndex !== false) {
            if($user) {
                $planToBuy = $plans[$planIndex];
                $userShop = Page::where('user_id', $user->id)->where('active', true)->where('layout_id', 12)->first();

                $balance = 0;
                $currentPlanId = $userShop->field_u_shop_plan;

                $currentPlanIndex = array_search($currentPlanId, array_column($plans, 'id'));
                $userPlanDate = $userShop->field_u_shop_plan_date;

                if($currentPlanIndex !== false) {
                    $balance = $plans[$currentPlanIndex]["monthPrice"] - $plans[$currentPlanIndex]["monthPrice"] / 30 * $this->dateDiff(date('m/d/Y', $userPlanDate), "now");
                }

                if($plans[$planIndex]["isPayable"]) {
                    
                    $orderId = isset($_GET["oid"]) ? $_GET["oid"] : "";
                    $amount = $plans[$planIndex]["monthPrice"];
                    
                    $ch = curl_init();
                    
                    $monthPrice = $amount - $balance;

                    $payload = json_encode(array(
                        "amount" => array(
                            "value" => $monthPrice,
                            "currency" => "RUB"    
                        ),
                        "confirmation" => array (
                        "type" => "embedded"
                        ),
                        "capture" => true,
                        "metadata" => array(
                            "oid" => $orderId,
                            "sid" => $userShop["id"],
                            "pid" => $planToBuy['id']
                        ),
                        "description" => "Оплата тарифа " . $orderId
                    ));
                    
                    $headers = array(
                        'Content-type: application/json',
                        'Idempotence-Key:' . Str::random(64)
                    );
                    
                    $yookassa = $homepage["field_yookassa_shopid"] . ":" . $homepage["field_yookassa_secret"];
            
                    curl_setopt($ch, CURLOPT_URL,'https://api.yookassa.ru/v3/payments');
                    curl_setopt($ch, CURLOPT_POST, 1);
                    curl_setopt($ch, CURLOPT_USERPWD, $yookassa); //"900768:test_afHuRABND2I288dyGduc3sMrra3J-uK5IeslqqLqKW8"
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
                    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                    
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    
                    $server_output = curl_exec($ch);

                    if(json_decode($server_output, true)["confirmation"]) {

                        $userPayments = array();

                        if(json_decode($userShop->field_payments, true) != null) {
                            $userPayments = json_decode($userShop->field_payments, true);
                        }

                        array_push($userPayments, json_decode($server_output, true));

                        $userShop->field_payments = json_encode($userPayments);
                        $userShop->save();
                    }
                    
                    print_r($server_output);
                    // return Response::json(array(
                    //     'result' => $server_output,
                    // ));
                    curl_close ($ch);
                } else {
                    $userShop->field_u_shop_plan = $planToBuy['id'];
                    $userShop->field_u_shop_plan_date = $tsDate;
                    $success = $userShop->save();
                    return Response::json(array(
                        'result' => $success
                    ));
                }
                
            } else {
                return App::abort(400, json_encode(array(
                    'errors' => '',
                )));
            }
        }

        

/*

        return $success
            ? Response::json(array(
                'result' => $success,
            ))
            
*/
    }

    public function dateDiff($start, $end) {
        $start_ts = strtotime($start);
        $end_ts = strtotime($end);
        $diff = $end_ts - $start_ts;
        return round($diff / 86400);
    }

    public function webhook() {
        $homepage = Page::find(1);
        $paymentsArr = array();
        
        if(json_decode($homepage->field_payments, true) != null) {
            $paymentsArr = json_decode($homepage->field_payments, true);
        }
        
        $data = json_decode(Request::getContent(), true);
        
        //print_r($data['type']);
        
        if($data['type'] == "notification" && $data['event'] == "payment.succeeded") {
            //print_r("userPayments");
            $date = new DateTime();
            $tsDate = $date->getTimestamp();
            $obj = $data['object'];

            $userShop = Page::find($obj['metadata']['sid']);
            //print_r($userShop);
            
            if($userShop) {

                $userPayments = array();

                if(json_decode($userShop->field_payments, true) != null) {
                    $userPayments = json_decode($userShop->field_payments, true);
                }

                $paymentIndex = array_search($obj['id'], array_column($userPayments, 'id'));

                if($paymentIndex !== false) {
                    $userPayments[$paymentIndex] = $data;

                    $userShop->field_payments = json_encode($userPayments);
                    //print_r($userShop['field_payments']);
                    $userShop->field_u_shop_plan = $obj['metadata']['pid'];
                    $userShop->field_u_shop_plan_date = $tsDate;
                    
                    $userShop->save();
                }

                //array_push($userPayments, $data);
                //print_r(json_encode($userPayments));
                //$fff = array();
                
            }

            array_push($paymentsArr, $data);
            
        }

        //print_r("paymentsArr");
        $homepage->field_payments = json_encode($paymentsArr);
        $homepage->save();
        //print_r(json_encode(Request::getContent()));

         
            // Response::json(array(
            //     'result' => $data,
            // ))
            // : App::abort(400, json_encode(array(
            //     'errors' => '',
            //     'item' => "",
            // )));
    }

    public function getwebhook() {
        $homepage = Page::find(1);
        $sid = Input::get('sid');

        if($sid) {
            $userShop = Page::find($sid);
            if($userShop) {
                
                $userPayments = array();
                $userPendingPayments = array();
                $userPlanDate = $userShop->field_u_shop_plan_date;
                $userTransactions = array();
                $userNotifications = array();

                if(json_decode($userShop->field_payments, true) != null) {
                    $userPayments = json_decode($userShop->field_payments, true);
                }

                if(json_decode($userShop->field_pending_payments, true) != null) {
                    $userPendingPayments = json_decode($userShop->field_pending_payments, true);
                }

                if(json_decode($userShop->field_transactions, true) != null) {
                    $userTransactions = json_decode($userShop->field_transactions, true);
                }

                if(json_decode($userShop->field_notifications, true) != null) {
                    $userNotifications = json_decode($userShop->field_notifications, true);
                }

                return Response::json([
                    //"price" => $this->computeMonthPrice(300, 0),
                    "date" => date('m/d/Y', $userPlanDate),
                    "actions" => $userTransactions,
                    "dateDiff" => $this->dateDiff(date('m/d/Y', $userPlanDate), "now"),
                    "count" => count($userPayments),
                    "data" => $userPayments,
                    "pending" => $userPendingPayments,
                    "notifications" => $userNotifications
                ], 200);
            }
        }
        // $paymentsArr = array();

        // if(json_decode($homepage->field_payments, true) != null) {
        //     $paymentsArr = json_decode($homepage->field_payments, true);
        // }
        
        //print_r(json_decode($homepage->field_payments, true));
        return Response::json([
          "data" => json_decode($homepage->field_payments, true)
        ], 200);
    }

	public function pay()
	{
        $pageId = isset($_GET["pid"]) ? $_GET["pid"] : null;
        
        if($pageId) {
            
    	    $pageuser = Page::findById($pageId);
    	    
            if($pageuser) {
                
                $orderId = isset($_GET["oid"]) ? $_GET["oid"] : "";
                $orderAmount = isset($_GET["amount"]) ? $_GET["amount"] : "1";
                
                $ch = curl_init();
                
                $payload = json_encode(array(
                    "amount" => array(
                        "value" => $orderAmount,
                        "currency" => "RUB"    
                    ),
                    "confirmation" => array (
                      "type" => "embedded"
                    ),
                    "capture" => true,
                    "description" => "Заказ " . $orderId
                ));
                
                $headers = array(
                    'Content-type: application/json',
                    'Idempotence-Key:' . Str::random(64),
                );
                
                $yookassa = $pageuser["field_yookassa_shopid"] . ":" . $pageuser["field_yookassa_secret"];
        
                curl_setopt($ch, CURLOPT_URL,'https://api.yookassa.ru/v3/payments');
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_USERPWD, $yookassa); //"900768:test_afHuRABND2I288dyGduc3sMrra3J-uK5IeslqqLqKW8"
                curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                
                $server_output = curl_exec($ch);
                print_r($server_output);
                curl_close ($ch);
            
            }
        }
    
    
    }
}

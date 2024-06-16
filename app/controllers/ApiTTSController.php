<?php

class ApiTTSController extends BaseController {

    public function tts() {

        $auth = $this->getAuth();
        
        $url = 'https://smartspeech.sber.ru/rest/v1/text:synthesize';
        $voice = 'Bys_24000';
        $text = 'Когда-то в прошлом фруктовый сад самарского мецената, а ныне ботанический сад Самарского университета';
        $headers = [
            "Content-Type: application/text",
            "Authorization: Bearer " . $auth['access_token']
        ];

        $data = array();
 
        $ch = curl_init(); 

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $text);
        //curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

        //curl_setopt_array($ch, $options);
        $result = curl_exec($ch);
        //print_r($auth);
        //$data['request'] = curl_getinfo($ch);
        $storage = app('path.domain') . '/allow/public/data/tts/';
        file_put_contents($storage . 'tts.wav', $result);
        if(curl_error($ch)) {
            print_r(curl_error($ch));
        }
        curl_close($ch); 

        

        //$data['auth'] = $this->getAuth();
        //$data['result'] = $result;

        return Response::json($data);
    }

    public function getTTS($text, $isSSML = false, $filename = '') {
        if(!$text) return '';
        if(!$filename) return '';

        

        $storage = app('path.domain') . '/allow/public/data/tts/';
        $publicStorage = '/site/data/tts/';

        $auth = $this->getAuth();
        if(!$auth || !$auth['access_token']) return '';
        
        $url = 'https://smartspeech.sber.ru/rest/v1/text:synthesize';
        $voice = 'Bys_24000';

        $text = str_replace('&', '&amp;', $text);
        $contentType = $isSSML ? 'ssml' : 'text';
        $headers = [
            "Content-Type: application/" . $contentType,
            "Authorization: Bearer " . $auth['access_token']
        ];

        
 
        $ch = curl_init(); 

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $text);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0); 
        curl_setopt($ch, CURLOPT_TIMEOUT, 0);

        //set_time_limit(100);
        $result = curl_exec($ch);
        //print_r($result);
        $success = file_put_contents($storage . $filename . '.wav', $result);

        if(curl_error($ch)) {
            print_r(curl_error($ch));
        }
        curl_close($ch);

        return $success ? 
            $publicStorage . $filename . '.wav'
            : '';
    }

    public function ttsByPageId($pageId) {

        $page = Page::find($pageId);
        if(!$page) return Response::json(array(), 404);
        if(!$page['field_tts_text']) return Response::json(array('error' => 'field_tts_text is empty'), 500);

        $auth = $this->getAuth();
        
        $url = 'https://smartspeech.sber.ru/rest/v1/text:synthesize';
        $voice = 'Bys_24000';
        $text = str_replace('&', '&amp;', $page['field_tts_text']);
        //htmlspecialchars($page['field_tts_text'], ENT_XML1, 'UTF-8');
        //'Когда-то в прошлом фруктовый сад самарского мецената, а ныне ботанический сад Самарского университета';
        $headers = [
            "Content-Type: application/ssml",
            "Authorization: Bearer " . $auth['access_token']
        ];

        $data = array();
        $data['text'] = $text;
 
        $ch = curl_init(); 

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $text);
        //curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

        //curl_setopt_array($ch, $options);
        $result = curl_exec($ch);
        //print_r($auth);
        //$data['request'] = curl_getinfo($ch);
        $storage = app('path.domain') . '/allow/public/data/tts/';
        file_put_contents($storage . $pageId . '.wav', $result);
        if(curl_error($ch)) {
            print_r(curl_error($ch));
        }
        curl_close($ch); 

        

        //$data['auth'] = $this->getAuth();
        //$data['result'] = $result;

        return Response::json($data);
    }

    public function getAuth() {

        $url = 'https://ngw.devices.sberbank.ru:9443/api/v2/oauth';
        $RqUID = uniqid();
        
        $authData = 'MjY1YjYwZDctNzE4Yy00N2IyLThkZWYtYjFlMmVlOTY3NWE2OjBlMzM2MDcyLTQ3NjctNDg3MC1hNWUwLWFjZTQ5NWY5MGMwNQ==';

        $headers = [
            'Content-Type: application/x-www-form-urlencoded',
            'RqUID: ' . $this->gen_uuid(),
            'Authorization: Basic ' . $authData
        ];

        $ch = curl_init(); 

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "scope=SALUTE_SPEECH_PERS");
        //curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        //curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);

        //curl_setopt_array($ch, $options);   
        
        $auth = json_decode(curl_exec($ch), true); 
        //print_r($auth);
        //$data['request'] = curl_getinfo($ch);
        if(curl_error($ch)) {
            print_r(curl_error($ch));
        }
        curl_close($ch); 

        return $auth;

    } 

    public function gen_uuid() {
        return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            // 32 bits for "time_low"
            mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),

            // 16 bits for "time_mid"
            mt_rand( 0, 0xffff ),

            // 16 bits for "time_hi_and_version",
            // four most significant bits holds version number 4
            mt_rand( 0, 0x0fff ) | 0x4000,

            // 16 bits, 8 bits for "clk_seq_hi_res",
            // 8 bits for "clk_seq_low",
            // two most significant bits holds zero and one for variant DCE1.1
            mt_rand( 0, 0x3fff ) | 0x8000,

            // 48 bits for "node"
            mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff )
        );
    }

}
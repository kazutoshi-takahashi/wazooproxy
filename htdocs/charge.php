<?php
require('../lib/Payjp.php');
require('../lib/config.php');

charge();

function charge(){
    $token = get_param('token');
    if($token === null){
        $res = array('status' => 400, 'type' => 'parameter', 'message' => 'token未指定');
        response($res);
    }
    $amount = get_param('amount');
    if($amount === null){
        $res = array('status' => 400, 'type' => 'parameter', 'message' => 'amount未指定');
        response($res);
    }
    $description = get_param('description');

    $config = config();
    $Payjp = new Payjp($config['api_key']);
    $charge = $Payjp->charge($token, $amount, 'jpy', $description);

    response($charge);
}

function response($arr){
    $xmlstr = '<?xml version="1.0" ?><response></response>';
    $xml = new SimpleXMLElement($xmlstr);
    foreach($arr as $key => $value){
        $xml->addChild($key, $value);
    }

    header('Content-Type: application/xml');
    print $xml->asXML();
    exit;
}

function get_param($key){
    if(isset($_GET[$key])) return $_GET[$key];
    if(isset($_POST[$key])) return $_POST[$key];
    return null;
}

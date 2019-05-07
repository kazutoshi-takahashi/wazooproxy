<?php
require_once('vendor/autoload.php');

class Payjp {
    private $apiKey;

    public function __construct($apiKey){
        $this->apiKey = $apiKey;
    }

    public function charge($token, $amount, $currency = 'jpy', $description = ''){
        \Payjp\Payjp::setApiKey($this->apiKey);
        try {
            $charge = \Payjp\Charge::create(array(
                'card'          => $token,
                'amount'        => $amount,
                'currency'      => $currency,
                'description'   => $description
            ));
            $res = array(
                'status'  => '200',
                'id'      => $charge->id
            );
            return $res;
        }
        catch(\Payjp\Error\InvalidRequest $e){
            $res = array(
                'status'  => $e->getHttpStatus(),
                'type'    => $e->type,
                'message' => $e->getMessage()
            );
            return $res;
        }
    }

}



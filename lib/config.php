<?php
function config(){
    // 本番用
    if(getenv('PAYJP_API_ENV') == 'production'){
        return array(
            'api_key' => ''
        );
    }

    // 開発用
    return array(
        'api_key' => 'sk_test_edc89cfe800ca75948a0249d'
    );
}


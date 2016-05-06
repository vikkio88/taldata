<?php

use Dbo\Models\Balance;
require 'vendor/autoload.php';
require_once 'config/const.php';
require_once 'config/slim.conf.php';

$app->get('/',function($request,$response,$args){
    
    $card = $request->getParam('c',571765);
    $balances = new Balance();
    $highest = $balances->getHighest();
    $results = $balances->getDataByCardNum($card);
    $randoms = $balances->getRandom();
    
    return $this->view->render($response, 'index.html', [
        'card' => $card,
        'results' => $results,
        'highest' => $highest,
        'randoms' => $randoms,
        'json_data' => json_encode(array_reverse($results))
        
    ]);
})->setName('index');


$app->run();
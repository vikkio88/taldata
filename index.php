<?php

require 'vendor/autoload.php';
require 'config/const.php';

use Dbo\Models\Balance;

$configuration = [
    'settings' => [
        'displayErrorDetails' => true,
    ],
];
$c = new \Slim\Container($configuration);
$app = new \Slim\App($c);


// Get container
$container = $app->getContainer();

// Register component on container
$container['view'] = function ($container) {
    $view = new \Slim\Views\Twig('templates', [
        'cache' => 'cache'
    ]);
    $view->addExtension(new \Slim\Views\TwigExtension(
        $container['router'],
        $container['request']->getUri()
    ));

    return $view;
};


$app->get('/',function($request,$response,$args){
    $card = $request->getParam('c',571765);
    $balances = new Balance();
    $highest = $balances->getHighest();
    $results = $balances->getDataByCardNum($card);
    $randoms = $balances->getRandom();
    
    return $this->view->render($response, 'example.html', [
        'card' => $card,
        'results' => $results,
        'highest' => $highest,
        'randoms' => $randoms,
        'json_data' => json_encode(array_reverse($results))
        
    ]);
})->setName('profile');


$app->run();
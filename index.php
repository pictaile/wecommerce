<?php
require_once __DIR__.'/vendor/autoload.php';
$app = new Silex\Application();

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/web',
));

$app['debug'] = false;

$app->get('/test', 'Controllers\TestController::index');

$app->post('/', 'Controllers\ClientController::index');
$app->get('/', 'Controllers\ClientController::index');


$app->run();
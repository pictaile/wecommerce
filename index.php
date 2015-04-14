<?php
require_once __DIR__.'/vendor/autoload.php';
$app = new Silex\Application();

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/web',
));

$app['debug'] = true;
$app->get('/', 'Controllers\ClientController::index');
$app->run();
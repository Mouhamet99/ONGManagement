<?php
require_once __DIR__.'/../vendor/autoload.php';

use App\core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', function(){
    return 'Home Page';
});
$app->run();
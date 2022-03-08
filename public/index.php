<?php
require_once __DIR__.'/../vendor/autoload.php';

use App\src\Controllers\AuthController;
use App\src\Controllers\ONGController;
use App\core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/ong',[ONGController::class, 'home']);
$app->router->get('/ong/new',[ONGController::class, 'addONG']);
$app->router->post('/ong/new',[ONGController::class, 'addONG']);

$app->router->get('/',[AuthController::class, 'login']);
$app->router->post('/login',[AuthController::class, 'login']);

$app->run();
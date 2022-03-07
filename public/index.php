<?php
require_once __DIR__.'/../vendor/autoload.php';

use App\src\Controllers\ONGController;
use App\core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/ong',[ONGController::class, 'home']);
$app->run();
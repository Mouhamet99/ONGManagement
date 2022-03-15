<?php

namespace App\core;

use App\src\Controllers\Controller;

class Application
{
    public Router $router;
    public Request $request;
    public Response $response;
    public static string $ROOT_PATH;
    public static Application $app;
    public Controller $controller;

    public function __construct($ROOT)
    {
        session_start();
        self::$ROOT_PATH = $ROOT;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);

    }

    public function run()
    {
        echo $this->router->resolve();
    }

    /**
     * @return Controller
     */
    public function getController(): Controller
    {
        return $this->controller;
    }

    /**
     * @param Controller $controller
     */
    public function setController(Controller $controller): void
    {
        $this->controller = $controller;
    }


}
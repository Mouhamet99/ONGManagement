<?php
namespace App\core;

class Application
{
    public Router $router;
    public Request $request;
    public Response $response;
    public static string $ROOT_PATH;

    public function __construct($ROOT)
    {
        self::$ROOT_PATH = $ROOT;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
    }

    public function run()
    {
        echo $this->router->resolve();
    }


}
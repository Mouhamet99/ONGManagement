<?php

namespace App\core;

class Router
{
    public Request $request;
    public Response $response;
    public array $routes = [];

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function get(string $path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;

        if ($callback === false) {
            return 'Not Found';
        }
        if(is_string($callback)){

        }

        return call_user_func($callback);
    }


}
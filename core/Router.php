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

    public function get($path, $callback)
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
        if (is_string($callback)) {
            return $this->RenderView($callback);
        }
        if (is_array($callback)) {
            Application::$app->setController(new $callback[0]());
            $callback[0] = Application::$app->controller;
        }

        return call_user_func($callback, $this->request);
    }

    public function RenderView($view)
    {
        return include_once Application::$ROOT_PATH . "/Views/$view.php";
    }


}
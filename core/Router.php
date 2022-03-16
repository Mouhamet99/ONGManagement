<?php

namespace App\core;


class Router
{
    private Request $request;
    private Response $response;
    private array $routes = [];

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }


    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;


        if ($callback === false) {
            $this->response->setStatusCode('404');
            return $this->renderView('_404');
        }
        if (is_string($callback)) {
            return $this->renderView($callback);
        }
        if (is_array($callback)) {
            Application::$app->setController(new $callback[0]());
            $callback[0] = Application::$app->getController();
        }

        $pattern = '/(edit|remove)\/(\d+)$/';
        $realPath = $this->request->getRealPath();
        $result = preg_match($pattern, $realPath, $matches);
        if ($result === 1) {
            return call_user_func($callback, $matches[2]);
        }

        return call_user_func($callback, $this->request);
    }

    public function renderView($view, array $params = [])
    {
        $layout = Application::$app->getController()->getLayout();
        $layoutContent = $this->layoutContent($layout);
        $viewContent = $this->viewContent($view, $params);

        return str_replace('{{body_content}}', $viewContent, $layoutContent);
    }

    public function renderOnlyView($view, $params = [])
    {
        foreach ($params as $key => $value) {
            $$key = $value;
        }
        return include_once Application::$ROOT_PATH . "/Views/$view.php";
    }

    public function viewContent($view, $params = [])
    {
        foreach ($params as $key => $value) {
            $$key = $value;
        }
        ob_start();
        include_once Application::$ROOT_PATH . "/Views/$view.php";
        return ob_get_clean();
    }

    public function layoutContent($layout)
    {
        ob_start();
        include_once Application::$ROOT_PATH . "/Views/layouts/$layout.php";
        return ob_get_clean();
    }


}
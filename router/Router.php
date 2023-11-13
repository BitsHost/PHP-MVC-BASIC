<?php
namespace Router;


class Router {
    private $routes = [];

    public function addRoute($route, $controller) {
        $this->routes[$route] = $controller;
    }

    public function dispatch($url) {
        if (array_key_exists($url, $this->routes)) {
            $controller = $this->routes[$url];
            $this->callController($controller);
        } else {
            // Handle 404 Not Found
            //$this->callController('NotFoundController');
            echo "NotFoundController";
        }
    }

    private function callController($controller) {
        $controllerObject = new $controller();
        $controllerObject->invoke();
    }
}

<?php
class Router {

    protected $routes =[];
    protected $params =[];

    public function add($route, $params) {
        $this->routes[$route] = $params;
    }

    public function match($url) {
        foreach ($this->routes as $route => $param) {

            if ($url == $route){
                $this->params = $param;
                return true;
            }
        }
        return false;
    }

    public function getRoutes() {
        return $this->routes;
    }

    public function getParams() {
        return $this->params;
    }

}
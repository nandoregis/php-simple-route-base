<?php

namespace app\Controller;

class Controller
{
    private $routes = [];
    
    public function get_routes()
    {
        return $this->routes;
    }

     protected function set_routes(Array $routes) 
    {
        array_push($this->routes, $routes);
    }
}
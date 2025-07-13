<?php

namespace app\Core;

class Routes
{

    private $dir;
    private $routes = [];

    public function __construct() 
    {   
        $this->dir = str_replace('Core', 'Modules', __DIR__ );
        $this->list_routes($this->get_modules($this->dir));  
    }

    public function run()
    {   
     
        foreach ($this->routes as $key => $metodo) {
          
            foreach ($metodo as $key_sec => $value) 
            {

                $dir = strtolower($value['dir']);
                $route = str_replace(['{', '}'], ['$',''], $value['route']);
                $http = $value['http'];
                $controller = $value['controller'];
                $method = $value['method'];

                foreach ($http as $key_ter => $value) {
                    # code...´
                    if($value == 'GET') 
                    {
                        get($route, function () use ($controller , $method) {
                            $controller->$method();
                        });
                    
                    } else if ($value == 'POST')
                    {
                        post($route, function () use ($controller , $method) {
                            $controller->$method();
                        });
                    }
                
                }


            }
        }
    }

    private function get_modules(String $path)
    {
        $dirs = [];

        foreach (scandir($path) as $item) {
            if (
                $item === '.' || $item === '..' ||
                !is_dir($path . DIRECTORY_SEPARATOR . $item)
            ) continue;

            $dirs[] = $item;
        }

        return $dirs;
    }

    private function list_routes(Array $modules)
    {
        
        foreach ($modules as $module) {
            $routesPath = $this->dir . DIRECTORY_SEPARATOR . $module . DIRECTORY_SEPARATOR . 'routes.php';

            if (file_exists($routesPath)) {
                $controllerClass = require $routesPath;
                $this->routes[$module] = $controllerClass;
            } else {
                echo "Arquivo routes.php não encontrado no módulo: $module\n";
            }
        }

    }
}
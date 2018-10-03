<?php

class Router
{
    private $routes;

    public  function __construct()
    {
        $routesPath = __DIR__.'/../config/routes.php';
        $this->routes = include($routesPath);
    }

    private function getURI ()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run (){
    	
        $uri = $this->getURI();

        foreach ($this->routes as $uriPattern => $path) {
            if (preg_match("~$uriPattern~", $uri)) {
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                $segments = explode('/', $internalRoute);
                $controllerName = array_shift($segments).'Controller';
                $controllerName = ucfirst($controllerName);
                $actionName = 'action'.ucfirst(array_shift($segments));
                $parameters = $segments;
                $controllerFile = __DIR__ . '/../app/controllers/' . $controllerName . '.php';
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
                if (file_exists($controllerFile)) {
                    include_once ($controllerFile);
                }
                if (class_exists($controllerName)) {
                    $controllerObject = new $controllerName;
                    if (method_exists($controllerObject, $actionName)) {
                        $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                        break;
                    } 
                    else {
                        //load 404 method
                    }
                } 
                else {
                    //load 404
                }
            }
        }
    }
}
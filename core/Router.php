<?php 

class Router {
    
    function define($routes) {
        $this->routes  = $routes;
    }
    function direct($uri) {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }

        throw new Exception('No Routes Defined For This URI.');
    }

    public static function load($file) {
        $router = new static;
        require $file;

        return $router;
    }
    
}
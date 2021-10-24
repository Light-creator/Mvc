<?php

namespace Services;

class Router {

    public static $routes = [];

    public static function get($uri, $controller) {
        self::$routes['GET'][$uri] = $controller; 
    }

    public static function post($uri, $controller, $requests=null, $files=null) {
        self::$routes['POST'][$uri] = [
            'controller' => $controller,
            'requests' => $requests,
            'files' => $files
        ];
    }

    public static function show_routes() {
        echo "<pre>";
        print_r(self::$routes);
        echo "</pre>";
    }

}
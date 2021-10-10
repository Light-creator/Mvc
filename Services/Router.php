<?php

namespace Services;

class Router {

    public static $routes = [];

    public static function get($uri, $controller) {
        self::$routes['GET'][$uri] = $controller; 
    }

    public static function post($uri, $controller) {
        self::$routes['POST'][$uri] = $controller;
    }

    public static function show_routes() {
        echo "<pre>";
        print_r(self::$routes);
        echo "</pre>";
    }

}
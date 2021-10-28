<?php

namespace Services;

use Services\Router;
use Services\View;


class App {

    public static function run() {

        $controller_data = self::get_uri();
        
        if($controller_data == false) {
            View::view('error', ['code' => '404', 'message' => 'Page Not Found']);
            die();
        }
        
        $method = $_SERVER['REQUEST_METHOD'];
        if($method == 'POST') {
            $controller_name = "\\Controllers\\". explode('@', $controller_data['controller'])[0];
            $controller_method = explode('@', $controller_data['controller'])[1];

            $controller = new $controller_name;

            if($controller_data['requests'] == true && $controller_data['files'] == true) {
                $controller->$controller_method($_POST, $_FILES);
            } else if($controller_data['requests'] == true) {
                $controller->$controller_method($_POST);
            } else if($controller_data['files'] == true) {
                $controller->$controller_method($_FILES);
            } else {
                $controller->$controller_method();
            }

        } else {
            $controller_name = "\\Controllers\\". explode('@', $controller_data)[0];
            $controller_method = explode('@', $controller_data)[1];

            $controller = new $controller_name;
            $controller->$controller_method();
        }
        
    }

    private static function get_uri() {

        $method = $_SERVER['REQUEST_METHOD'];
        $url = $_SERVER['REQUEST_URI'];
        if(array_key_exists($url, Router::$routes[$method])) {
            return Router::$routes[$method][$url];
        } else {
            return false;
        }
    }
    
}
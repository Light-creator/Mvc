<?php

namespace Services;

trait View {

    public static function view($name, $query=null) {
        if($query != null) {
            foreach($query as $key => $val) {
                ${$key} = $val;
            }
        }
        if(isset($_SESSION['query']) && $_SESSION['query'] != false) {
            foreach($_SESSION['query'] as $key => $val) {
                ${$key} = $val;
            } 
        }

        $_SESSION['query'] = false;
        require_once $_SERVER['DOCUMENT_ROOT']. "/views/". $name . ".php";

    }

    public static function redirect($name, $query=null) {
        $_SESSION['query'] = $query;
        header('Location: ' .$name);
    }

}
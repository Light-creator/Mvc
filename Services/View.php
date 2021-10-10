<?php

namespace Services;

trait View {

    public static function view($name, $query=null) {
        if($query != null) {
            foreach($query as $key => $val) {
                ${$key} = $val;
            }
        }
        require_once $_SERVER['DOCUMENT_ROOT']. "/views/". $name . ".php";

    }

}
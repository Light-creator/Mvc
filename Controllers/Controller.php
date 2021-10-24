<?php

namespace Controllers;
use Services\View;

class Controller {
    
    public function view($name, $query=null) {
        return View::view($name, $query);
    }

    public function redirect($name, $query=null) {
        return View::redirect($name, $query);
    }
    
}
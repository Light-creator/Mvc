<?php
namespace Controllers;

use Controllers\Controller;

class AuthController extends Controller {

    public function get_register() {

        return $this->view('auth/register');
    }

    public function post_register() {
        return "Hello";
    }

    public function get_auth() {
        
    }

    public function post_auth() {
        
    }

}
<?php

namespace Controllers;

use Controllers\Controller;


class HomeController extends Controller{

    public function index() {
        $test = '1';
        return $this->view('home', ['test' => $test]);

    }

}
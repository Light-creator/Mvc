<?php

namespace Services;

class Validation {

    public static function email($str) {
        $re = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
        return preg_match($re, $str);
    }

    public static function name($str) {

    }

    public static function password($str) {

    }

}
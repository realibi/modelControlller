<?php

namespace Models;

use Core\Config;
use Core\Helpers;

class Cookies {

    private function __construct()
    {
    }

    static function set($name, $value = "", $expire = 0, $secure = false, $httponly = false) {
        setcookie($name, $value, $expire, "/", "", $secure, $httponly);
        return self::get($name);
    }

    static function get($key = null) {
        return Helpers::keyOrArray($_COOKIE, $key);
    }

}
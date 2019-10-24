<?php

namespace Models;

use Core\Helpers;

class Session {

    private function __construct()
    {
    }

    static function set($key, $value) {
        $_SESSION[$key] = $value;
        return self::get($key);
    }

    static function get($key = null) {
        return Helpers::keyOrArray($_SESSION, $key);
    }

}
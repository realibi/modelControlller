<?php

namespace Models;

final class Hash {

    private function __construct()
    {
    }

    static function generate() {
        return md5(hexdec(uniqid()));
    }

}
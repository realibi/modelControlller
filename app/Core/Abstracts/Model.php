<?php

namespace Core\Abstracts;

use Core\Interfaces\ModelInterface;
use Core\Database;

abstract class Model implements ModelInterface {

    public function db()
    {
        return new Database();
    }

}
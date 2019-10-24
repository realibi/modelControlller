<?php

namespace Core;

use Core\Config;
use Medoo\Medoo;

class Database extends Medoo {

    public function __construct()
    {
        parent::__construct(Config::database());
    }

}
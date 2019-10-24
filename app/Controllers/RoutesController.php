<?php

namespace Controllers;

use Core\Abstracts\Controller;
use Medoo\Medoo;

class RoutesController extends Controller {

    public function __construct()
    {
    }

    function redirect($name) {
        return $this->render($name);
    }
}
<?php

namespace Controllers;

use Core\Abstracts\Controller;
use Medoo\Medoo;

class UserController extends Controller {

    public $db;
    public $cart = [];

    public function __construct()
    {
        $this->db = new Medoo([
            'database_type' => 'mysql',
            'database_name' => 'php_model_controlller',
            'server' => 'localhost',
            'username' => 'root',
            'password' => ''
        ]);
    }

    function getUser($id){
        return json_encode($this->db->get("users", "*", [
            "id" => $id
        ]));
    }
}
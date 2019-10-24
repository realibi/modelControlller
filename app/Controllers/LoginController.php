<?php

namespace Controllers;

use Core\Abstracts\Controller;
use Models\Auth;

class LoginController extends Controller {

    function show() {
        return $this->render("admin/login", [
            "title" => "Форма входа"
        ]);
    }

    function make($username, $password) {

        return Auth::login($username, $password);

    }

}
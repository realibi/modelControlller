<?php

namespace Controllers;

use Core\Abstracts\Controller;
use Medoo\Medoo;

class ItemsController extends Controller {

    public $db;
    public $cart = [];

    public function __construct()
    {
        $this->db = new Medoo([
            'database_type' => 'mysql',
            'database_name' => 'ishop',
            'server' => 'localhost',
            'username' => 'root',
            'password' => ''
        ]);
    }

    function showPage() {
        return $this->render("index");
    }

    function redirectToCart(){
        return $this->render("cart");
    }

    function getItems(){
        return json_encode($this->db->select("items", "*"));
    }

    function addToCart($id){
        if($_SESSION["cart"] != null)
            $_SESSION["cart"][] = $id;
        else
            $_SESSION["cart"] = [$id];
    }

    function getCart(){
        return json_encode($_SESSION["cart"]);
    }

    function getItem($id){
        return json_encode($this->db->get("items", "*", [
            "id" => $id
        ]));
    }

    function removeItem($id){
        foreach($_SESSION["cart"] as $key => $item){
            if($item == $id){
                unset($_SESSION["cart"][$key]);
            }
        }
    }

    function clearCart(){
        $_SESSION["cart"] = [];
    }
}
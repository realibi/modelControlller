<?php

namespace Controllers;

use Core\Abstracts\Controller;
use Medoo\Medoo;

class DashboardController extends Controller {

    public $db;

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
        return $this->render("admin/dashboard");
    }

    function getCategories(){
        return json_encode($this->db->select('categories', "*"));
    }

    function getItems(){
        return json_encode($this->db->select('items', "*"));
    }

    function deleteCategory($id){
        $this->db->delete("categories", [ "id" => $id ]);
    }

    function deleteItem($id){
        $this->db->delete("items", [ "id" => $id ]);
    }

    function createCategory($categoryName){
        $this->db->insert("categories", [ "name" => $categoryName ]);
    }

    function createItem($itemName, $itemPrice, $itemCategory){
        $this->db->insert("items", [ 
            "name" => $itemName,
            "price" => $itemPrice,
            "category" => $itemCategory
            ]);
        return $itemPrice;
    }
}
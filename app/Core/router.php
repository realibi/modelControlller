<?php
 //header("Access-Control-Allow-Origin: *");

use Controllers\LoginController;
use Core\Helpers;
use Core\RenderEngine;
use Klein\Klein;
use Klein\Request;
use Klein\Response;
use Models\Auth;
use Models\Password;
use Models\Tables\Users;

$router = new Klein();
$itemsController = new \Controllers\ItemsController();
$routesController = new \Controllers\RoutesController();
$dashboardController = new \Controllers\DashboardController();
$userController = new \Controllers\UserController();

$router->get("/[:id]", function (Request $request, Response $response) use ($userController) {
        
    return $userController->getUser($request->id);
});

// $router->with("/items", function () use ($router, $itemsController, $routesController) {

//     $router->get("/?", function (Request $request, Response $response) use ($routesController) {
        
//         return $routesController->redirect("index");
//     });

//     $router->get("/allItems", function (Request $request, Response $response) use ($itemsController) {
        
//         return $itemsController->getItems();
//     });

//     $router->get("/add/[:id]", function (Request $request, Response $response) use ($itemsController) {
        
//         return $itemsController->addToCart($request->id);
//     });

//     $router->get("/cart/?", function (Request $request, Response $response) use ($routesController) {
        
//         return $routesController->redirect("cart");   
//     });

//     $router->get("/getCart/?", function (Request $request, Response $response) use ($itemsController) {
        
//         return $itemsController->getCart();
//     });

//     $router->get("/clearCart/?", function (Request $request, Response $response) use ($itemsController) {
        
//         return $itemsController->clearCart();
//     });

//     $router->get("/removeItem/[i:id]/?", function (Request $request, Response $response) use ($itemsController) {
//         return $itemsController->removeItem($request->param("id"));
//     });

//     $router->get("/getItem/[:id]/?", function (Request $request, Response $response) use ($itemsController) {
        
//         return $itemsController->getItem($request->id);
//     });
// });

// $router->with("/admin", function () use ($router, $dashboardController) {

//     $router->get("/?", function (Request $request, Response $response) {
//         return $response->redirect(Helpers::url("admin", "dashboard"))->send();
//     });

//     $router->get("/dashboard/?", function (Request $request, Response $response) use ($dashboardController) {

//         //Auth::middleware($response);

//         return $dashboardController->showPage();
//     });

//     $router->get("/dashboard/categories", function () use ($dashboardController) {

//         //Auth::middleware($response);

//         return $dashboardController->getCategories();
//     });

//     $router->get("/dashboard/categories/delete/[:id]" , function (Request $request, Response $response) use ($dashboardController) {

//         //Auth::middleware($response);

//         return $dashboardController->deleteCategory($request->id);
//     });

//     $router->get("/dashboard/categories/create/[:categoryName]" , function (Request $request, Response $response) use ($dashboardController) {

//         //Auth::middleware($response);

//         return $dashboardController->createCategory($request->categoryName);
//     });

//     $router->post("/dashboard/items/create/[:data]" , function (Request $request, Response $response) use ($dashboardController) {

//         //Auth::middleware($response);

//         return $dashboardController->createItem($request->data[itemName], $request->data[itemPrice], $request->data[itemCategory]);
//     });

//     $router->get("/dashboard/items/delete/[:id]" , function (Request $request, Response $response) use ($dashboardController) {

//         //Auth::middleware($response);

//         return $dashboardController->deleteItem($request->id);
//     });

//     $router->get("/dashboard/items", function () use ($dashboardController) {

//         //Auth::middleware($response);

//         return $dashboardController->getItems();
//     });

//     $router->get("/logout/?", function (Request $request, Response $response) {

//         Auth::logout();

//         return $response->redirect(Helpers::url("login"))->send();

//     });


// });

$router->dispatch();
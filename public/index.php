<?php

use App\Controllers\Person_controller;
use App\Controllers\Promo_controller;
use Router\RouterHandler;

require __DIR__ . '/../vendor/autoload.php';

$slug = $_GET["slug"] ?? "";
$slug = explode("/", $slug);
$resource = $slug[0] == "" ? "/": $slug[0];
$action = $slug[1] ?? null;
$id = $slug[2] ?? null;

$router = new RouterHandler;

switch($resource){

    case '/':
        require('../app/views/view_welcome_panel.php');
        break;
    
    case "coders":      
        $method = $_SERVER['REQUEST_METHOD'];
        $router -> set_method($method);
        $router -> set_data($_POST);
        $router -> route(Person_controller::class, $action, $id);
        break;
    case "promos":      
        $method = $_SERVER['REQUEST_METHOD'];
        $router -> set_method($method);
        $router -> set_data($_POST);
        $router -> route(Promo_controller::class, $action, $id);
        break;
    default:
        echo "404 Not Found";
        break;
}

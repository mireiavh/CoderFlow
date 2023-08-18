<?php

use App\Controllers\Person_controller;
use Router\RouterHandler;

require __DIR__ . '/../vendor/autoload.php';

// obtener la URL de la vista en la que estamos
$slug = $_GET["slug"] ?? "";
$slug = explode("/", $slug);
$resource = $slug[0] == "" ? "/": $slug[0];
$id = $slug[1] ?? null;

// instancia del Router
$router = new RouterHandler;

switch($resource){
    
    case "coders":        
        $method = $_POST["method"] ?? "get";
        $router -> set_method($method);
        $router -> set_data($_POST);
        $router -> route(Person_controller::class, $id);
        break;
    default:
        echo "404 Not Found";
        break;
}

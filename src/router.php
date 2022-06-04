<?php

use App\app;

$url = trim($_GET["url"] ?? "", '/');

$url_explpde = explode('/', $url);

app::loadData();

$url_1 = $url_explpde[0];

switch ($url_1) {
    case '':
        app::requiere_view('inicio');           
        break;
    case 'servicios':
        app::requiere_view('servicios');          
        break;
    case 'eventos':
        app::requiere_view("eventos");         
        break;
    case 'autenticar':
        app::requiere_view('autenticar');           
        break;
    case 'registro':
        app::requiere_view("registro"); 
        break;
    case 'post':
        $controlador =  ($url_explpde[1] ?? '') . ".php";
        $path = __DIR__ . "/Controller/$controlador";

        if (file_exists($path)){
            require $path;
        }else{

            echo "<h3>El controldaor [$controlador] no existes</h3>";
            echo "<h4>Ruta [$path] no existes</h4>";
        }

        break;
    default:
        app::requiere_view("not-found");
        break;
}
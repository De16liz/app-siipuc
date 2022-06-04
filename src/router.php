<?php

use App\app;

$url = $_GET["url"] ?? "";
//echo $url;
switch ($url) {
    case '':
        require "Views/inicio.php";           
        break;
    case 'servicios':
        require "Views/servicios.php";           
        break;
    case 'eventos':
        require "Views/eventos.php";           
        break;
    case 'autenticar':
        require "Views/autenticar.php";           
        break;
    case 'registro':
        require "Views/registro.php";
        app::requiere_view("registro"); 
        break;
    default:
        app::requiere_view("not-found");
        break;
}
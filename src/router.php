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
    
    default:
        app::requiere_view("not-found");
        break;
}
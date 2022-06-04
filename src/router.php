<?php

use App\app;

$url = $_GET["url"] ?? "";

app::loadData();

switch ($url) {
    case '':
        app::requiere_view('inicio');           
        break;
    case 'servicios':
        app::requiere_view('servicios');          
        break;
    case 'eventos':
        require "Views/eventos.php";           
        break;
    case 'autenticar':
        app::requiere_view('autenticar');           
        break;
    case 'registro':
        require "Views/registro.php";
        app::requiere_view("registro"); 
        break;
    default:
        app::requiere_view("not-found");
        break;
}
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
        app::requiere_view("eventos");         
        break;
    case 'autenticar':
        app::requiere_view('autenticar');           
        break;
    case 'registro':
        app::requiere_view("registro"); 
        break;
    default:
        app::requiere_view("not-found");
        break;
}
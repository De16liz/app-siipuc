<?php

use App\app;

$url = $_GET["url"] ?? "";
//echo $url;
switch ($url) {
    case 'value':
        # code...
        break;
    
    default:
        app::requiere_view("not-found");
        break;
}
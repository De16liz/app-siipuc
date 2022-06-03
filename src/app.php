<?php

namespace App;

class app{
    static function requiere(string $path){
        require "src/$path";
    }

    static function requiere_view(string $path){
        $app_path_view = "src/Views/$path.php";
        require __DIR__. "/Views/body.php";
    }
    
}
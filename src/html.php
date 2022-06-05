<?php

namespace App;

class html{
    public static function echo_path_obsolute($path):void{
       echo router::generar_ruta_abosoluta($path);
    }

    static function echo_css_path(string $path):void{
        self::echo_path_obsolute( "public/css/$path.css" );
    }

    static function echo_js_path(string $path):void{
        self::echo_path_obsolute( "public/js/$path.js" );
    }

    static function echo_img_path(string $path):void{
        self::echo_path_obsolute("public/img/$path");
    }
}
<?php

namespace App;

class router{

    public static function generar_ruta_abosoluta(string $ruta):string {
        $host = $_SERVER['HTTP_HOST'];
        $uri =  dirname($_SERVER['SCRIPT_NAME']);
        return   "http://$host" . "$uri/$ruta";
    }
}
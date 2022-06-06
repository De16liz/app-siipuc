<?php

namespace App;

class router{

    public static function generar_ruta_abosoluta(string $ruta):string {
        $protocol = $_ENV['app-protocol-http'];
        $host = $_SERVER['HTTP_HOST'];
        $uri =  dirname($_SERVER['SCRIPT_NAME']);
        return   "$protocol://$host" . "$uri/$ruta";
    }
}
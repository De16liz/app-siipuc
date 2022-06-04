<?php

namespace App;

use App\Views\Classes\MenuItem;

//  Clases para menejar la aplicacion
class app{

    // Parametros
    private static array $meneList = [];

    /** 
     * Carga la configuración inicial de la pagina
     */
    static function loadData():void{

        self::$meneList = [
            (new MenuItem('Blob', 'fa fa-briefcase', 'blob')),
            (new MenuItem('Servicios', 'fa fa-home', 'serivicios')),
            (new MenuItem('Eventos', 'fa fa-briefcase', 'eventos')),
            (new MenuItem('Iniciar sesión', 'fa fa-briefcase', 'autenticar')),
        ];

    }


    static function requiere(string $path){
        require "src/$path";
    }

    static function requiere_view(string $path){
        $app_path_view = "src/Views/Pages/$path.view.php";
        require __DIR__. "/Views/body.php";
    }

    /**
     * @return MenuItem[]
     */
    static function getMune():array{
        return self::$meneList;
    }
}
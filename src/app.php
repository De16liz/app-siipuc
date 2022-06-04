<?php

namespace App;

use App\Views\Classes\MenuItem;

//  Clases para menejar la aplicacion
class app{

    // Parametros
    private static array $menu_list = [];

    // Guard los css personalidas por session
    private static array $css_list = [];

    private static string $name_seccion = "";

    /** 
     * Carga la configuración inicial de la pagina
     */
    static function loadData():void{

        self::$menu_list = [
            (new MenuItem('Blog', 'fa fa-briefcase', '')),
            (new MenuItem('Servicios', 'fa fa-home', 'servicios')),
            (new MenuItem('Eventos', 'fa fa-briefcase', 'eventos')),
            (new MenuItem('Iniciar sesión', 'fa fa-briefcase', 'autenticar')),
            (new MenuItem('Registros', 'fa fa-briefcase', 'registro')),
        ];

        self::$css_list[] = "public/css/pages/.globales.css";

    }


    static function requiere(string $path){
        require "src/$path";
    }

    static function requiere_view(string $path){
        $app_path_view = "src/Views/Pages/$path.view.php";

        $app_path_css = "public/css/pages/$path.css";


        self::$name_seccion = $path;

        if (file_exists($app_path_css)){
            self::$css_list[] = $app_path_css;
        }

        require __DIR__. "/Views/body.php";
    }

    /**
     * @return MenuItem[]
     */
    static function get_menu():array{
        return self::$menu_list;
    }


    /**
     * @return string[]
     */
    static function get_css():array{
        return self::$css_list;
    }

    static function get_name_seccion():string {
        return self::$name_seccion;
    }
}
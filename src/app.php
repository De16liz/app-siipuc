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

    
    static function run():void {
        

        // Validmos el la sesión
        if (session_status() != 2) session_start();
        

        // self::echo_json(self::esta_logeado());

        if (!self::esta_logeado() && ($_GET['url'] ?? '') != "login" && ($_GET['url'] ?? '') != "registrarse"){
            self::ir_a('login');
        }
        
        if (db::connect()){
            
        }else{
            self::send_message("Error con la conexión de la base de datos\nRevise los datos de conexion");
        }
        
        require __DIR__ . '/run.php';
    }
    
    static function send_message(string $message):void{
        $_ENV['app-message'] = $message;
    }

    static function requiere_view(string $path){

        $app_path_view = "src/Views/Pages/$path.view.php";

        $app_path_css = "public/css/pages/$path.css";


        self::$name_seccion = $path;

        if (file_exists($app_path_css)){
            self::$css_list[] = $app_path_css;
        }

        require __DIR__. "/Views/index.php";
    }

    /**
     * @return MenuItem[]
     */
    static function get_menu():array{
        return self::$menu_list;
    }

    /**
     * Retorna true si el usuario a inicaod sesión
     */
    static function esta_logeado():bool{
        return ($_SESSION['usuario'] ?? false);
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

    static function echo_json($value):void{
        header('Content-type: application/json');
        echo json_encode($value, 128); exit;
    }

    static function ir_a(string $vista):void{
        $path = router::generar_ruta_abosoluta($vista);
        header("Location: $path");
        exit();
    }
}
<?php
// Aqui corremos la applicación

use App\app;
use App\db;

$url = trim($_GET['url'] ?? '', '/');

// Validmos el la sesión
if (session_status() != 2) session_start();

if (db::connect()){
            
}else{
    app::send_message("Error con la conexión de la base de datos\nRevise los datos de conexion");
}

// self::echo_json(self::esta_logeado());

if (!app::esta_logeado() && $url != "login" && $url != "registrarse" && $url != 'post/usuario-registrar' && $url != 'post/usuario-autenticar'){
    app::ir_a('login');
}
        


$url_explode = explode('/', $url);

if ($url_explode[0] == 'post'){
    // Quiere decir que es un peticio de controlador
    $controlador = __DIR__ . "/Controllers/" . ($url_explode[1] ?? '') . ".php";

    if (file_exists($controlador)){
        require $controlador;
    }else{
        // En caso de que el controlador no exista
        echo "El contralador no exists [" . $url_explode[1] ?? '' . "]\n";
        echo "Ruta: " . $controlador;
    }


}else{

    // 
    $vista = $url_explode[0];
    
    $ruta_vista = "";

    $ruter = function($vista):string {
        switch($vista){
            case '': return 'inicio';
            case 'inicio': return 'inicio';

            // Iniciar sesion:
            case 'login': return 'login';
            case 'registrarse': return 'registrarse';

            // Sección de secretaria
            case 'membresias': return 'secretaria/membresias';
            case 'bautismos': return 'secretaria/bautismos';
            case 'matrimonios': return 'secretaria/matrimonios';
            case 'niñez': return 'secretaria/niñez';
            case 'datos-generales': return 'secretaria/datos-generales';

            // Seccion del formato
            case 'formato': return 'formato';

            // Sección de servicios
            case 'eventos': return 'servicios/eventos';
            case 'circulares': return 'servicios/circulares';
            case 'actas-de-reuniones': return 'servicios/actas-de-reuniones';
            default: return 'not-found';
        }
    };
    
    $ruta = $ruter($vista);
    if ($ruta == 'login' || $ruta == 'registrarse'){

        // Validsmos que este registrado.
        $numero_de_usuario = db::query("select count(*) from usuarios")->fetch(PDO::FETCH_NUM)[0];
        if ($ruta == 'login'){
            
            if ( $numero_de_usuario == 0 ){
                app::ir_a('registrarse');
            }
            
            require __DIR__ . '/Views/login.php';

        }else{

            if ( $numero_de_usuario == 1 ){
                app::ir_a('login');
            }
            require __DIR__ . '/Views/registrarse.php';

        }




    }else{
        app::requiere_view($ruta);
    }


}
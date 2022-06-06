<?php

use App\app;
use App\db;

$id_membresia = $_GET['id'] ?? null;

if ($id_membresia){
    // Registramops
    $datos = [];

    foreach ( $_POST  as $compo => $valor ){
    
        $datos[ $compo ] = strtolower( $valor );
    
    }
    

    $res = db::uptdate('membresias', $datos, [ 'id=:id', [ 'id' => $id_membresia] ]);

    if ($res){
        // Se actualizo los datos
        app::send_message('Datos actualziados');

    }else{
        app::send_message('Error con la acutalización de los datos');
    }

}else{
    // Regresamos a la vista
    app::send_message("No hay id para actualziar");
}
app::ir_a('membresias');
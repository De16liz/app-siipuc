<?php

use App\app;
use App\db;

db::connect();

//app::echo_json($_POST);

$datos = [];

foreach ( $_POST  as $compo => $valor ){

    $datos[ $compo ] = strtolower( $valor );

}



$res = db::insert($datos, 'membresias');

if ($res){
    app::send_message("Registro con exito");
    app::ir_a('membresias');
}else{
    app::send_message("No registrado\nPor favor intentelo nuevamente");
    app::ir_a('membresias');
}
<?php

use App\app;
use App\db;

db::connect();

//app::echo_json($_POST);
$res = db::insert($_POST, 'eventos');

if ($res){
    app::send_message("Registro con exito");
    app::ir_a('eventos');
}else{
    app::send_message("No registrado\nPor favor intentelo nuevamente");
    app::ir_a('eventos');
}
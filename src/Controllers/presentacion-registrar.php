<?php

use App\app;
use App\db;

db::connect();

//app::echo_json($_POST);
$res = db::insert($_POST, 'presentacion_niños');

if ($res){
    app::send_message("Registro con exito");
    app::ir_a('niñez');
}else{
    app::send_message("No registrado\nPor favor intentelo nuevamente");
    app::ir_a('niñez');
}
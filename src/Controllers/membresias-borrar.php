<?php

use App\app;
use App\db;

db::connect();

$id = $_GET['id'];

//app::echo_json($_POST);
$res = db::delete(' membresias', 'id=:id', [ 'id' => $id] );

if ($res){
    app::ir_a('membresias');
}else{
    app::send_message("No se borro el registro\nPor favor intentelo nuevamente");
    app::ir_a('membresias');
}
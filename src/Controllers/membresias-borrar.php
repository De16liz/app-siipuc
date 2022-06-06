<?php

use App\app;
use App\db;

$res = db::connect();

$id = $_GET['id'];

//app::echo_json($_POST);
db::delete(' membresias', 'id=:id', [ 'id' => $id] );

if ($res){
    // SI se regiostrp
    echo "Si";
}else{
    // No se regiror
    echo "No";
}
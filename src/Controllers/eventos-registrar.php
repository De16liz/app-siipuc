<?php

use App\app;
use App\db;

db::connect();

//app::echo_json($_POST);
$res = db::insert($_POST, 'eventos');

if ($res){
    // SI se regiostrp
    echo "Si";
}else{
    // No se regiror
    echo "No";
}
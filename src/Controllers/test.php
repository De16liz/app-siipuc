<?php

use App\app;
use App\db;

$_POST;

app::echo_json($_POST);
// $res = db::insert($_POST, 'usuarios');

if ($res){
    // SI se regiostrp
    echo "Si";
}else{
    // No se regiror
    echo "No";
}
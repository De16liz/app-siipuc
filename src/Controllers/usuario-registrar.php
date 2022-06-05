<?php

use App\app;
use App\db;

$res = db::insert($_POST, 'usuarios');

if ( $res ){
    $_SESSION['usuario'] = true;
    app::send_message('Usuario registrado correctamente');
    app::ir_a('');
}else {
    app::send_message('Ups, no pudimos regitrar el usuairo');

    app::ir_a('registrarse');
}
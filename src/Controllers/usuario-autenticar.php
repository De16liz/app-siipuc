<?php

use App\app;
use App\db;

$sql = "select count(*) from usuarios where usuario=:usuario and password=:password";
$res = db::query($sql, $_POST )->fetch(PDO::FETCH_NUM)[0];

if ( $res ){
    $_SESSION['usuario'] = true;
    app::ir_a('');
}else {
    app::send_message("Credenciales erroneas\nPor favor intentelo nuevamente.");
    app::ir_a('login');
}
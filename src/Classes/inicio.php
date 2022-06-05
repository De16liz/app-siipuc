<?php
namespace App\Classes;

class inicio{

    public static function listar_imagenes( ):array{
        $path = "public/img/inicio";
        // Abrimos la carpeta que nos pasan como parámetro
        $dir = opendir($path);

        $images = [];
        $i = 0;
        // Leo todos los ficheros de la carpeta
        while ($elemento = readdir($dir)){
            // Tratamos los elementos . y .. que tienen todas las carpetas
            if( $elemento != "." && $elemento != ".."){
                // Si es una carpeta
                if( is_dir($path.$elemento) ){
                    // Muestro la carpeta
                    // echo "<p><strong>CARPETA: ". $elemento ."</strong></p>";
                // Si es un fichero
                } else {
                    // Muestro el fichero
                    $images[] = "$path/" . $elemento;
                    // echo "<br />". $elemento;
                }
            }
            $i++;
            if ( $i == 5) break;
        }

        return $images;
    }
}
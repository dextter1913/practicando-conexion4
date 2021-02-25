<?php 
    $host = "localhost";
    $usuario = "root";
    $contraseña = "";
    $datosbase = "tecno";

    $tabla1 = "persona";

    $tabla2 = "usuarios";

    error_reporting(1);
    $conexion = new mysqli($host, $usuario, $contraseña, $datosbase);

    if ($conexion->connect_errno) {
        echo "lo sentimos, no se pudo completar e registro por un error interno";
    }
?>
<?php

$conexion = mysqli_connect(
    "localhost",
    "danylo",
    "1234",
    "recus"
);

if(!$conexion){

    die("Error conexión");

}

session_start();

?>

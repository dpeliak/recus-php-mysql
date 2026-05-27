<?php

session_start();

$codigo = $_GET["codigo"];

foreach($_SESSION["productos"] as $i => $producto){

    if($producto["codigo"] == $codigo){

        unset($_SESSION["productos"][$i]);

    }

}

header("Location: index.php");

?>

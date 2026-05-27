<?php

include "conexion.php";

if(!isset($_SESSION["login"])){

    header("Location: index.php");

}

$id = $_GET["id"];

$sql = "DELETE FROM productos WHERE id=$id";

mysqli_query($conexion, $sql);

header("Location: index.php");

?>

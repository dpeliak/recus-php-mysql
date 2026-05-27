<?php

include "conexion.php";

$id = $_POST["id"];

$nombre = $_POST["nombre"];

$precio = $_POST["precio"];

$sql = "UPDATE productos SET nombre='$nombre', precio='$precio'WHERE id=$id";

mysqli_query($conexion, $sql);

header("Location: index.php");

?>

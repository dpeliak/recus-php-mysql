<?php

include "conexion.php";

$id = $_GET["id"];

$sql = "SELECT * FROM productos WHERE id=$id";

$resultado = mysqli_query($conexion, $sql);

$producto = mysqli_fetch_assoc($resultado);

echo $producto["nombre"];

echo "<br>";

echo $producto["precio"];

?>

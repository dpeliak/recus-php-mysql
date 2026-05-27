<?php


include "conexion.php";

$codigo = $_POST["codigo"];
$nombre = $_POST["nombre"];
$distribuidor = $_POST["distribuidor"];
$precio = $_POST["precio"];
$stock = $_POST["stock"];
$categoria = $_POST["categoria"];

$sql = "INSERT INTO productos(codigo,nombre,distribuidor,precio,stock,categoria)VALUES('$codigo','$nombre','$distribuidor','$precio','$stock','$categoria')";

if(mysqli_query($conexion, $sql)){

    header("Location: index.php");

}else{

    echo mysqli_error($conexion);

}

?>

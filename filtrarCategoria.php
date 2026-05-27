<?php

include "conexion.php";

$categoria = $_POST["categoria"];

$sql = "SELECT * FROM productos WHERE categoria='$categoria'";

$resultado = mysqli_query($conexion, $sql);

while($producto = mysqli_fetch_assoc($resultado)){

    echo $producto["nombre"];

    echo "<br>";

    echo $producto["categoria"];

    echo "<br><br>";

}

?>

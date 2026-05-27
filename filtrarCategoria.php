<?php

session_start();

$categoria = $_POST["categoria"];

echo "<h1>Filtrados</h1>";

foreach($_SESSION["productos"] as $producto){

    if($producto["categoria"] == $categoria){

        echo $producto["nombre"];

        echo "<br>";

        echo $producto["precio"];

        echo "<br>";

        echo $producto["categoria"];

        echo "<br><br>";

    }

}

?>

<a href="index.php">Volver</a>

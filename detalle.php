<?php

session_start();

$codigo = $_GET["codigo"];

foreach($_SESSION["productos"] as $producto){

    if($producto["codigo"] == $codigo){

        echo "Codigo: ".$producto["codigo"];

        echo "<br>";

        echo "Nombre: ".$producto["nombre"];

        echo "<br>";

        echo "Distribuidor: ".$producto["distribuidor"];

        echo "<br>";

        echo "Precio: ".$producto["precio"];

        echo "<br>";

        echo "Stock: ".$producto["stock"];

        echo "<br>";

        echo "Categoria: ".$producto["categoria"];

    }

}

?>

<br><br>

<a href="index.php">Volver</a>

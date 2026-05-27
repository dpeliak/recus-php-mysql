<?php

session_start();

$codigo = $_GET["codigo"];

foreach($_SESSION["productos"] as $i => $producto){

    if($producto["codigo"] == $codigo){

        $indice = $i;

        $p = $producto;

    }

}

if(isset($_POST["codigo"])){

    $_SESSION["productos"][$indice] = [

        "codigo" => $_POST["codigo"],
        "nombre" => $_POST["nombre"],
        "distribuidor" => $_POST["distribuidor"],
        "precio" => $_POST["precio"],
        "stock" => $_POST["stock"],
        "categoria" => $_POST["categoria"]

    ];

    header("Location: index.php");

}

?>

<h1>Modificar producto</h1>

<form method="POST">

	Codigo:
	<input type="number" name="codigo"
	value="<?php echo $p["codigo"]; ?>">

<br><br>

	Nombre:
	<input type="text" name="nombre"
	value="<?php echo $p["nombre"]; ?>">

<br><br>

	Distribuidor:
	<input type="text" name="distribuidor"
	value="<?php echo $p["distribuidor"]; ?>">

<br><br>

	Precio:
	<input type="number" name="precio"
	value="<?php echo $p["precio"]; ?>">

<br><br>

	Stock:
	<input type="number" name="stock"
	value="<?php echo $p["stock"]; ?>">

<br><br>

	Categoria:
	<input type="text" name="categoria"
	value="<?php echo $p["categoria"]; ?>">

<br><br>

	<button type="submit">
	Modificar
</button>

</form>

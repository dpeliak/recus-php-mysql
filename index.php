<?php

session_start();

if(!isset($_SESSION["productos"])){

    $_SESSION["productos"] = [];

}

$productos = $_SESSION["productos"];

?>

<h1>Productos</h1>

	<a href="crear.php">Crear producto</a>

<br><br>

	<form action="filtrarCategoria.php" method="POST">

	<select name="categoria">

	<option value="Perifericos">Perifericos</option>

	<option value="Pantallas">Pantallas</option>

	<option value="Componentes">Componentes</option>

</select>

	<button type="submit">
	Filtrar
</button>

</form>

<br>

<?php foreach($productos as $producto){ ?>

	Codigo:
	<?php echo $producto["codigo"]; ?>

<br>

	Nombre:
	<?php echo $producto["nombre"]; ?>

<br>

	Distribuidor:
	<?php echo $producto["distribuidor"]; ?>

<br>

	Precio:
	<?php echo $producto["precio"]; ?>

<br>

	Stock:
	<?php echo $producto["stock"]; ?>

<br>

	Categoria:
	<?php echo $producto["categoria"]; ?>

<br>

	<a href="detalle.php?codigo=<?php echo $producto["codigo"]; ?>">Detalle</a>

<a href="modificar.php?codigo=<?php echo $producto["codigo"]; ?>">Modificar</a>

<a href="eliminar.php?codigo=<?php echo $producto["codigo"]; ?>">Eliminar</a>

<br><br>

<?php } ?>

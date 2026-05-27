<?php

include "conexion.php";

if(!isset($_SESSION["login"])){

    header("Location: index.php");

}

?>

<h1>Crear producto</h1>

	<form action="guardar.php" method="POST">

	Codigo:
	<input type="number" name="codigo">

<br><br>

	Nombre:
	<input type="text" name="nombre">

<br><br>

	Distribuidor:
	<input type="text" name="distribuidor">

<br><br>

	Precio:
	<input type="number" name="precio">

<br><br>

	Stock:
	<input type="number" name="stock">

<br><br>

	Categoria:

	<select name="categoria">

	<option value="Perifericos">
	Perifericos
</option>

	<option value="Pantallas">
	Pantallas
</option>

	<option value="Componentes">
	Componentes
</option>

</select>

<br><br>

	<button type="submit">
	Guardar
</button>

</form>

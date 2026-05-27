<?php

include "conexion.php";

if(!isset($_SESSION["login"])){

    header("Location: index.php");

}

$id = $_GET["id"];

$sql = "SELECT * FROM productos WHERE id=$id";

$resultado = mysqli_query($conexion, $sql);

$producto = mysqli_fetch_assoc($resultado);

?>

<form action="actualizar.php" method="POST">

<input type="hidden"
name="id"
value="<?php echo $producto["id"]; ?>">

	Nombre:
	<input type="text"
	name="nombre"
	value="<?php echo $producto["nombre"]; ?>">

<br><br>

	Precio:
	<input type="number"
	name="precio"
	value="<?php echo $producto["precio"]; ?>">

<br><br>

	<button type="submit">
	Modificar
</button>

</form>

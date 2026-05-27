<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include "conexion.php";

$sql = "SELECT * FROM productos";

$resultado = mysqli_query($conexion, $sql);

?>

<?php if(isset($_SESSION["login"])){ ?>

	Usuario:
	<?php echo $_SESSION["usuario"]; ?>

<br>

	Rol:
	<?php echo $_SESSION["rol"]; ?>

<br><br>

	<a href="logout.php">
	Logout
</a>

	<?php if($_SESSION["rol"] == "admin"){ ?>

<br><br>

	<a href="crearUsuario.php">
	Crear usuario
</a>

<?php } ?>

<?php } else { ?>

	<a href="login.php">
	Login
</a>

<?php } ?>

<h1>Productos</h1>

<?php if(isset($_SESSION["login"])){ ?>

	<a href="crear.php">
	Crear producto
</a>

<?php } ?>

<br><br>

<form action="filtrarCategoria.php" method="POST">

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

<button type="submit">
Filtrar
</button>

</form>

<br>

<?php while($producto = mysqli_fetch_assoc($resultado)){ ?>

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

<a href="detalle.php?id=<?php echo $producto["id"]; ?>">
Detalle
</a>

<?php if(isset($_SESSION["login"])){ ?>

<a href="modificar.php?id=<?php echo $producto["id"]; ?>">
Modificar
</a>

<a href="eliminar.php?id=<?php echo $producto["id"]; ?>">
Eliminar
</a>

<?php } ?>

<br><br>

<?php } ?>

<?php

include "conexion.php";

if($_SESSION["rol"] != "admin"){

    header("Location: index.php");

}

if(isset($_POST["usuario"])){

    $password = password_hash(
        $_POST["password"],
        PASSWORD_DEFAULT
    );

    $sql = "
    INSERT INTO usuarios(
    usuario,
    password,
    rol
    )

    VALUES(
    '".$_POST["usuario"]."',
    '$password',
    '".$_POST["rol"]."'
    )
    ";

    mysqli_query($conexion, $sql);

    header("Location: index.php");

}

?>

<form method="POST">

	Usuario:
	<input type="text" name="usuario">

<br><br>

	Password:
	<input type="password" name="password">

<br><br>

	Rol:

	<select name="rol">

	<option value="admin">
	admin
</option>

	<option value="user">
	user
</option>

</select>

<br><br>

	<button type="submit">
	Crear usuario
</button>

</form>

<?php

include "conexion.php";

if(isset($_POST["usuario"])){

    $usuario = $_POST["usuario"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario'";

    $resultado = mysqli_query($conexion, $sql);

    $u = mysqli_fetch_assoc($resultado);

    if(
        $u &&
        password_verify(
            $password,
            $u["password"]
        )
    ){

        $_SESSION["login"] = true;

        $_SESSION["usuario"] = $u["usuario"];

        $_SESSION["rol"] = $u["rol"];

        header("Location: index.php");

    }else{

        echo "Login incorrecto";

    }

}

?>

<form method="POST">

	Usuario:
	<input type="text" name="usuario">

<br><br>

	Password:
	<input type="password" name="password">

<br><br>

	<button type="submit">
	Entrar
</button>

</form>

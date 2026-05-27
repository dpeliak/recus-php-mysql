<?php

include "conexion.php";

$password = password_hash(
    "1234",
    PASSWORD_DEFAULT
);

$sql = "INSERT INTO usuarios(usuario, password, rol) VALUES ('admin','$password','admin')";

mysqli_query($conexion, $sql);

echo "Admin creado";
?>

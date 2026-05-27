<?php

if(!isset($_SESSION["usuarios"])){

    $_SESSION["usuarios"] = [

        [
            "usuario" => "admin",
            "password" => password_hash("1234", PASSWORD_DEFAULT),
            "rol" => "admin"
        ],

        [
            "usuario" => "user",
            "password" => password_hash("1234", PASSWORD_DEFAULT),
            "rol" => "user"
        ]

    ];

}

?>

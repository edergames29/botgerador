<?php

//conectar banco de dados
$servername = "localhost";
$username = "id10157631_edergame29";
$password = "88221488ch";
$db_name = "id10157631_ederbase29";

$connect = mysqli_connect($servername, $username, $password, $db_name);

if (mysqli_connect_error()):
	echo "ERRO DE CONECSAOKKKKK".mysqli_connect_error();
endif;
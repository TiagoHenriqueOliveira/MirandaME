<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "miranda_me";

$connection = @mysqli_connect ( $db_host, $db_user, $db_pass, $db_name );

if (mysqli_connect_errno($connection)) {
	$resultado = "Algum erro ocorreu com a conexão do servidor de
			banco de dados, erro reportado: " . mysqli_connect_error ();
} else {
	$resultado = "Conexão bem sucedida!";
}
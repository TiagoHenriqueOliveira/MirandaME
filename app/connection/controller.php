<?php
$titulo = "Conexão com o Banco de Dados";

function getConnection() {
	$connection = @mysqli_connect ( $db_host, $db_user, $db_pass, $db_name );
}

if (mysqli_connect_errno(getConnection())) {
	$resultado = "Algum erro ocorreu com a conexão do servidor de 
			banco de dados, erro reportado: " . mysqli_connect_error ();
} else {
	$resultado = "Conexão bem sucedida!";
}
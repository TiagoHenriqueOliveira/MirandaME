<?php
$titulo = "Conexão do Banco de Dados";

$conexao = @mysqli_connect ( $db_host, $db_user, $db_pass, $db_name );

if (mysqli_connect_errno ( $conexao )) {
	$resultado = "Algum erro ocorreu na conexão com o serviço do 
			banco de dados, erro reportado: " . mysqli_connect_error ();
} else {
	$resultado = "Conexão bem sucedida!";
}
<?php
$titulo = "Conex�o do Banco de Dados";

$conexao = @mysqli_connect ( $db_host, $db_user, $db_pass, $db_name );

if (mysqli_connect_errno ( $conexao )) {
	$resultado = "Algum erro ocorreu na conex�o com o servi�o do 
			banco de dados, erro reportado: " . mysqli_connect_error ();
} else {
	$resultado = "Conex�o bem sucedida!";
}
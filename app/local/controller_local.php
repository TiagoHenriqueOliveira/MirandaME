<?php

require_once 'db_connection.php';
require_once 'functions_local.php';

$connection = @mysqli_connect ( $db_host, $db_user, $db_pass, $db_name );

if(isset($_GET['action'])) {
	$acao = $_GET['action'];
} else {
	$acao = null;
}

switch($acao) {
	case "cadastrar" :
		$titulo = "Cadastro de Locais";
		cadastraLocal($connection);
		break;
		
	case "alterar" :
		$titulo = "Alteração de Locais";
		alteraLocal($connection);
		break;
		
	default:
		$titulo = "Lista de Locais";
		$locais = mostraTodos($connection);
		require 'view_lista_local.php';
		break;
}
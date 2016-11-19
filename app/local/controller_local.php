<?php

require_once 'connection/controller.php';
require_once 'functions_local.php';

$connection = getConnection();

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
		
	default:
		$titulo = "Lista de Locais";
		$locais = listarTodos($connection);
		require 'view_lista_local.php';
		break;
}
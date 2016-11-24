<?php
require_once 'db_connection.php';
require_once 'functions.php';

$connection = @mysqli_connect ( $db_host, $db_user, $db_pass, $db_name );

if (isset ( $_GET ['action'] )) {
	$acao = $_GET ['action'];
} else {
	$acao = null;
}

switch ($acao) {
	case "register" :
		registerProvider( $connection );
		break;
	
	case "alter" :
		alterProvider( $connection );
		break;
	
	default :
		$fornecedores = showAll( $connection );
		require 'view_list.php';
		break;
}
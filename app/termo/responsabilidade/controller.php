<?php

require_once 'db_connection.php';
require_once 'functions.php';

$connection = @mysqli_connect ( $db_host, $db_user, $db_pass, $db_name );

if(isset($_GET['action'])) {
	$acao = $_GET['action'];
} else {
	$acao = null;
}

switch($acao) {
	case "register" :
		registerTermResponsibility($connection);
		break;
		
	case "alter" :
		alterTermResponsibility($connection);
		break;
		
	default:
		$termos_responsabilidades = showAll($connection);
		require 'view_list.php';
		break;
}
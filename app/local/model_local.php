<?php

require_once 'db_connection.php';

$connection = getConnection();

function salvar($connection, $id, $nome, $responsavel) {
	
	if ($id == null || $id == "") {
		$sql = "INSERT INTO local(nome, responsavel) VALUES('.$nome.', '.$responsavel.')";
		$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
	} else {
		$sql = "UPDATE local l SET l.nome = '.$nome.', l.responsavel = '.$responsavel.' WHERE l.id = '.$id.'";
		$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
	}
	return $result;
}

function listaTodos($connection) {
	$sql = "SELECT l.id, l.nome, l.responsavel FROM local l ORDER BY l.nome";
	$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
	
	return $result;
}

function pesquisaPorNome($connection, $nome) {
	$sql = "SELECT l.nome, l.responsavel FROM local l WHERE l.nome = '.$nome.'";
	$result = mysqli_query($connection, $sql);
	
	return $result;
}
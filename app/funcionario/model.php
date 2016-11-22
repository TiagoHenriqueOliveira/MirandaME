<?php
function save($connection, $id, $nome, $data_nascimento, $endereco, $naturalidade, $telefone) {
	
	if ($id == null || $id == "") {
		$sql = "INSERT INTO funcionario(nome, data_nascimento, endereco, naturalidade, telefone) 
					VALUES('$nome', '$data_nascimento', '$endereco', '$naturalidade', '$telefone')";
		$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
	} else {
		$sql = "UPDATE funcionario f ". 
					 "SET f.nome = '$nome', f.data_nascimento = '$data_nascimento', ". 
						  "f.endereco = '$endereco', f.naturalidade = '$naturalidade', f.telefone = '$telefone' ".
					"WHERE f.id = '$id'";
		$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
	}
	return $result;
}

function listAll($connection) {
	$sql = "SELECT f.id, f.nome, f.data_nascimento, f.endereco, f.naturalidade, f.telefone ".
			  "FROM funcionario f ".
			  "ORDER BY f.nome";
	$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
	
	return $result;
}

function searchId($connection, $id) {
	$sql = "SELECT f.id, f.nome, f.data_nascimento, f.endereco, f.naturalidade, f.telefone ".
			  "FROM funcionario f ".
			  "WHERE f.id = '$id'";
	$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
	
	return $result;
}
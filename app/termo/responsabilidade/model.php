<?php

function salvar($connection, $id, $data, $responsavel) {
	
	if ($id == null || $id == "") {
		$sql = "INSERT INTO termo_responsabilidade(data, responsavel) VALUES('$data', '$responsavel')";
		$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
	} else {
		$sql = "UPDATE termo_responsabilidade tr ".
		          "SET tr.data = '$data', tr.responsavel = '$responsavel' ".
		          "WHERE tr.id = '$id'";
		$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
	}
	return $result;
}

function listAll($connection) {
	$sql = "SELECT tr.id, tr.data, tr.responsavel ".
			  "FROM termo_responsabilidade tr ".
			  "ORDER BY tr.responsavel";
	$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
	
	return $result;
}

function searchId($connection, $id) {
	$sql = "SELECT tr.id, tr.data, tr.responsavel ".
			  "FROM termo_responsabilidade tr ".
			  "WHERE tr.id = '$id'";
	$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
	
	return $result;
}
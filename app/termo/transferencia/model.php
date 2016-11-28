<?php

function salvar($connection, $id, $data, $responsavel_proximo, $id_responsavel_anterior) {
	
	if ($id == null || $id == "") {
		$sql = "INSERT INTO termo_transferencia(data, responsavel_proximo, id_responsavel_anterior) ". 
		 		  "VALUES('$data', '$responsavel_proximo', '$id_responsavel_anterior')";
		$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
	} else {
		$sql = "UPDATE termo_transferencia tt ".
		          "SET tt.data = '$data', tt.responsavel_proximo = '$responsavel_proximo', tt.id_responsavel_anterior = '$id_responsavel_anterior' ".
		          "WHERE tt.id = '$id'";
		$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
	}
	return $result;
}

function listAll($connection) {
	$sql = "SELECT tt.id, tt.data, tt.responsavel_proximo, tt.id_responsavel_anterior, tr.responsavel ".
			  "FROM termo_transferencia tt ".
			  "INNER JOIN termo_responsabilidade tr ".
			  "ON tt.id_responsavel_anterior = tr.id ".
			  "ORDER BY tt.responsavel_proximo";
	$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
	
	return $result;
}

function searchId($connection, $id) {
	$sql = "SELECT tt.id, tt.data, tt.responsavel_proximo, tt.id_responsavel_anterior, tr.responsavel ".
			  "FROM termo_transferencia tt ".
			  "INNER JOIN termo_responsabilidade tr ".
			  "ON tt.id_responsavel_anterior = tr.id ".
			  "WHERE tt.id = '$id'";
	$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
	
	return $result;
}
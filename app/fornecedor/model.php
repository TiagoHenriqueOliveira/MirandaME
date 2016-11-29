<?php
function save($connection, $id, $cnpj, $nome_fantasia, $razao_social, $inscricao_estadual, $endereco, $telefone, $uf, $municipio) {
	
	if ($id == null || $id == "") {
		$sql = "INSERT INTO fornecedor(cnpj, nome_fantasia, razao_social, inscricao_estadual, endereco, telefone, uf, municipio) ". 
				  "VALUES('$cnpj', '$nome_fantasia', '$razao_social', '$inscricao_estadual', '$endereco', '$telefone', '$uf', '$municipio')";
		$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
	} else {
		$sql = "UPDATE fornecedor f ". 
					 "SET f.cnpj = '$cnpj', f.nome_fantasia = '$nome_fantasia', f.razao_social = '$razao_social', ". 
					 "f.inscricao_estadual = '$inscricao_estadual', f.endereco = '$endereco', f.telefone = '$telefone', f.uf = '$uf', f.municipio = '$municipio' ".
					"WHERE f.id = '$id'";
		$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
	}
	return $result;
}

function listAll($connection) {
	$sql = "SELECT f.id, f.cnpj, f.nome_fantasia, f.razao_social, f.inscricao_estadual, f.endereco, f.telefone, uf, municipio ".
			  "FROM fornecedor f ".
			  "ORDER BY f.nome_fantasia";
	$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
	
	return $result;
}

function searchId($connection, $id) {
	$sql = "SELECT f.id, f.cnpj, f.nome_fantasia, f.razao_social, f.inscricao_estadual, f.endereco, f.telefone, uf, municipio ".
			  "FROM fornecedor f ".
			  "WHERE f.id = '$id'";
	$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
	
	return $result;
}
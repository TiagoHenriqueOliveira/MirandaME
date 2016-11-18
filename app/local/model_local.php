<?php

function salvar($connection, $id, $nome, $responsavel) {
	
	if ($id == null || $id == "") {
		$sql = "insert into local(nome, responsavel) values('.$nome.', '.$responsavel.')";
		$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
	} else {
		$sql = "update local l set l.nome = '.$nome.', l.responsavel = '.$responsavel.' where l.id = '.$id.'";
		$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
	}
	return $result;
}

function listaTodos($connection) {
	$sql = "select l.id, l.nome, l.responsavel from local l order by l.nome";
	$result = mysqli_query($connection, $sql);
	
	return $result;
}

function pesquisaPorNome($connection, $nome) {
	
	$sql = "select l.nome, l.responsavel from local l where l.nome = '.$nome.'";
	$result = mysqli_query($connection, $sql);
	
	return $result;
}
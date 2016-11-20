<?php

require_once 'db_connection.php';
require_once 'model_local.php';

$connection = getConnection();

function cadastraLocal($connection) {
	if (isset($_POST['frmCadLocal'])) {
		$idLocal = $_POST['txtId'];
		$nomeLocal = $_POST['txtNome'];
		$responsavelLocal = $_POST['txtResponsavel'];
		
		if (salvar($connection, $idLocal, $nomeLocal, $responsavelLocal)) {
			$return = "Local cadastrado com sucesso!";
			$locais = listarTodos($connection);
			require 'view_lista_local.php';
		} else {
			$erro = "Houve algum problema com o cadastro, verifique as informações e tente novamente!";
			require 'view_cad_local.php';
		}
	} else {
		require 'view_cad_local.php';
	}
}

function listarTodos($connection) {
	$query = listaTodos($connection);
	$dados = array();
	
	while($row = mysqli_fetch_array($query)) {
		$dados[] = array("id"=>$row['id'], "nome"=>$row['nome'], "responsavel"=>$row['responsavel']);
	}
	
	return $dados;
}
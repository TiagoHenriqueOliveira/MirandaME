<?php
require_once 'model_local.php';

function cadastraLocal($connection) {
	if (isset($_POST['frmCadLocal'])) {
		$id = $_POST['txtId'];
		$nome = $_POST['txtNome'];
		$responsavel = $_POST['txtResponsavel'];
		
		if (salvar($connection, $id, $nome, $responsavel)) {
			$return = "Local cadastrado com sucesso!";
			$locais = mostraTodos($connection);
			require 'view_lista_local.php';
		} else {
			$erro = "Houve algum problema com o cadastro, verifique as informações e tente novamente!";
			require 'view_cad_local.php';
		}
	} else {
		require 'view_cad_local.php';
	}
}

function alteraLocal($connection) {
	if (isset($_POST['txtId'])) {
		$id = $_POST['txtId'];
		$nome = $_POST['txtNome'];
		$responsavel = $_POST['txtResponsavel'];
		
		if (salvar($connection, $id, $nome, $responsavel)) {
			$return = "Local alterado com sucesso!";
			$locais = mostraTodos($connection);
			require 'view_lista_local.php';
		} else {
			$erro = "Houve algum problema com a alteração do cadastro, verifique as informações e tente novamente!";
		}
	}
	
	if(isset($_POST['txtId'])) {
		$id = $_POST['txtId'];
	} else {
		$id = $_GET['codigo'];
	}
	
	$query = pesquisaId($connection, $id);
	$result = mysqli_fetch_row($query);
	$dados = array("id"=>$result[0], "nome"=>utf8_decode($result[1]), "responsavel"=>utf8_decode($result[2]));
	require 'view_cad_local.php';
}

function mostraTodos($connection) {
	$query = pesquisaTodos($connection);
	$dados = array();
	
	while($row = mysqli_fetch_array($query)) {
		$dados[] = array("id"=>$row['id'], "nome"=>utf8_encode($row['nome']), "responsavel"=>utf8_encode($row['responsavel']));
	}
	
	return $dados;
}
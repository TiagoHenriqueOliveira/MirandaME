<?php
require_once 'model.php';

function cadastraLocal($connection) {
	$titulo = "Cadastro de Locais";
	if (isset($_POST['frmCadLocal'])) {
		$id = $_POST['txtId'];
		$nome = $_POST['txtNome'];
		$responsavel = $_POST['txtResponsavel'];
		
		if (salvar($connection, $id, $nome, $responsavel)) {
			$return = "Local cadastrado com sucesso!";
			$locais = showAll($connection);
			require 'view_list.php';
		} else {
			$erro = "Houve algum problema com o cadastro, verifique as informações e tente novamente!";
			require 'view_register.php';
		}
	} else {
		require 'view_register.php';
	}
}

function alteraLocal($connection) {
	$titulo = "Alteração de Locais";
	if (isset($_POST['txtId'])) {
		$id = $_POST['txtId'];
		$nome = $_POST['txtNome'];
		$responsavel = $_POST['txtResponsavel'];
		
		if (salvar($connection, $id, $nome, $responsavel)) {
			$return = "Local alterado com sucesso!";
			$locais = showAll($connection);
			require 'view_list.php';
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
	$dados = array("id"=>$result[0], "nome"=>$result[1], "responsavel"=>$result[2]);
	require 'view_register.php';
}

function showAll($connection) {
	$titulo = "Lista de Locais";
	$query = pesquisaTodos($connection);
	$dados = array();
	
	while($row = mysqli_fetch_array($query)) {
		$dados[] = array("id"=>$row['id'], "nome"=>$row['nome'], "responsavel"=>$row['responsavel']);
	}
	
	return $dados;
}
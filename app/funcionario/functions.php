<?php
require_once 'model.php';

function registerFunctionary($connection) {
	$titulo = "Cadastro de Funcionários";
	if (isset($_POST['frmCadFunci'])) {
		$id = $_POST['txtId'];
		$nome = $_POST['txtNome'];
		$data_nascimento = $_POST['txtDataNasc'];
		$endereco = $_POST['txtEndereco'];
		$naturalidade = $_POST['txtNaturalidade'];
		$telefone = $_POST['txtTelefone'];

		if (save($connection, $id, $nome, $data_nascimento, $endereco, $naturalidade, $telefone)) {
			$funcionarios = showAll($connection);
			require 'view_list.php';
		} else {
			$erro = "Houve algum problema com o cadastro, verifique as informações e tente novamente!";
			require 'view_register.php';
		}
	} else {
		require 'view_register.php';
	}
}

function alterFunctionary($connection) {
	$titulo = "Alteração de Funcionários";
	if (isset($_POST['txtId'])) {
		$id = $_POST['txtId'];
		$nome = $_POST['txtNome'];
		$data_nascimento = $_POST['txtDataNasc'];
		$endereco = $_POST['txtEndereco'];
		$naturalidade = $_POST['txtNaturalidade'];
		$telefone = $_POST['txtTelefone'];

	if (save($connection, $id, $nome, $data_nascimento, $endereco, $naturalidade, $telefone)) {
			$funcionarios = showAll($connection);
			require 'view_list.php';
		} else {
			$erro = "Houve algum problema com o cadastro, verifique as informações e tente novamente!";
		}
	}

	if(isset($_POST['txtId'])) {
		$id = $_POST['txtId'];
	} else {
		$id = $_GET['codigo'];
	}

	$query = searchId($connection, $id);
	$result = mysqli_fetch_row($query);
	$dados = array(
		"id"=>$result[0], 
		"nome"=>utf8_decode($result[1]), 
		"data_nascimento"=>utf8_decode($result[2]),
		"endereco"=>utf8_decode($result[3]),
		"naturalidade"=>utf8_decode($result[4]),
		"telefone"=>$result[5]
	);
	require 'view_register.php';
}

function showAll($connection) {
	$titulo = "Lista de Funcionários";
	$query = listAll($connection);
	$dados = array();
	
	while($row = mysqli_fetch_array($query)) {
		$dados[] = array(
			"id"=>$result['id'],
			"nome"=>utf8_decode($result['nome']),
			"data_nascimento"=>utf8_decode($result['data_nascimento']),
			"endereco"=>utf8_decode($result['endereco']),
			"naturalidade"=>utf8_decode($result['naturalidade']),
			"telefone"=>$result['telefone']
		);
	}
	
	return $dados;
}
<?php
require_once 'model.php';

function registerTermResponsibility($connection) {
	$titulo = "Cadastro dos Termos de Responsabilidade";
	if (isset($_POST['frmCadTermoResponsabilidade'])) {
		$id = $_POST['txtId'];
		$data = $_POST['txtData'];
		$responsavel = $_POST['txtResponsavel'];
		
		if (salvar($connection, $id, $data, $responsavel)) {
			$termos_responsabilidades = showAll($connection);
			require 'view_list.php';
		} else {
			$erro = "Houve algum problema com o cadastro, verifique as informações e tente novamente!";
			require 'view_register.php';
		}
	} else {
		require 'view_register.php';
	}
}

function alterTermResponsibility($connection) {
	$titulo = "Alteração dos Termos de Responsabilidade";
	if (isset($_POST['txtId'])) {
		$id = $_POST['txtId'];
		$data = $_POST['txtData'];
		$responsavel = $_POST['txtResponsavel'];
		
		if (salvar($connection, $id, $data, $responsavel)) {
			$termos_responsabilidades = showAll($connection);
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
	
	$query = searchId($connection, $id);
	$result = mysqli_fetch_row($query);
	$dados = array("id"=>$result[0], "data"=>$result[1], "responsavel"=>$result[2]);
	require 'view_register.php';
}

function showAll($connection) {
	$titulo = "Lista dos Termos de Responsabilidade";
	$query = listAllTermResponsibility($connection);
	$dados = array();
	
	while($row = mysqli_fetch_array($query)) {
		$dados[] = array("id"=>$row['id'], "data"=>$row['data'], "responsavel"=>$row['responsavel']);
	}
	
	return $dados;
}
<?php
require_once 'model.php';
// require_once 'responsabilidade/model.php';

function registerTermTransfer($connection) {
	$titulo = "Cadastro dos Termos de Transferência";
	if (isset($_POST['frmCadTermoTransferencia'])) {
		$id = $_POST['txtId'];
		$data = $_POST['txtData'];
		$responsavel_proximo = $_POST['txtResponsavelProximo'];
		$id_responsavel_anterior = $_POST['txtIdResponsavelAnterior'];
		
		if (salvar($connection, $id, $data, $responsavel_proximo, $id_responsavel_anterior)) {
			$termos_transferencias = showAll($connection);
			require 'view_list.php';
		} else {
			$erro = "Houve algum problema com o cadastro, verifique as informações e tente novamente!";
			require 'view_register.php';
		}
	} else {
		require 'view_register.php';
	}
}

function alterTermTransfer($connection) {
	$titulo = "Alteração dos Termos de Transferência";
	if (isset($_POST['txtId'])) {
		$id = $_POST['txtId'];
		$data = $_POST['txtData'];
		$responsavel_proximo = $_POST['txtResponsavelProximo'];
		$id_responsavel_anterior = $_POST['txtIdResponsavelAnterior'];
		
		if (salvar($connection, $id, $data, $responsavel_proximo, $id_responsavel_anterior)) {
			$termos_transferencias = showAll($connection);
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
	$dados = array("id"=>$result[0], "data"=>$result[1], "responsavel_proximo"=>utf8_decode($result[2]), "responsavel_anterior"=>utf8_decode($result[3]));
	require 'view_register.php';
}

function showAll($connection) {
	$titulo = "Lista dos Termos de Transferência";
	$query = listAll($connection);
	$dados = array();
	
	while($row = mysqli_fetch_array($query)) {
		$dados[] = array("id"=>$row['id'], "data"=>$row['data'], "responsavel_proximo"=>utf8_encode($row['responsavel_proximo']), "responsavel_anterior"=>utf8_decode($row['responsavel']));
	}
	
	return $dados;
}

function showLastResponsable($connection) {
	$query = listAllTermResponsibility($connection);
	$dados = array();
	
	while($row = mysqli_fetch_array($query)) {
		$dados[] = array("id"=>$row['id'], "responsavel"=>utf8_encode($row['responsavel']));
	}
	
	return $dados;
}
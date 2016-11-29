<?php
require_once 'model.php';

function registerProvider($connection) {
	$titulo = "Cadastro de Fornecedores";
	if (isset($_POST['frmCadFornece'])) {
		$id = $_POST['txtId'];
		$cnpj = $_POST['txtCNPJ'];
		$nome_fantasia = $_POST['txtNomeFantasia'];
		$razao_social = $_POST['txtRazaoSocial'];
		$inscricao_estadual = $_POST['txtInscEstadual'];
		$endereco = $_POST['txtEndereco'];
		$telefone = $_POST['txtTelefone'];
		$uf = $_POST['txtUF'];
		$municipio = $_POST['txtMunicipio'];

		if (save($connection, $id, $cnpj, $nome_fantasia, $razao_social, $inscricao_estadual, $endereco, $telefone, $uf, $municipio)) {
			$fornecedores = showAll($connection);
			require 'view_list.php';
		} else {
			$erro = "Houve algum problema com o cadastro, verifique as informações e tente novamente!";
			require 'view_register.php';
		}
	} else {
		require 'view_register.php';
	}
}

function alterProvider($connection) {
	$titulo = "Alteração de Fornecedores";
	if (isset($_POST['txtId'])) {
		$id = $_POST['txtId'];
		$cnpj = $_POST['txtCNPJ'];
		$nome_fantasia = $_POST['txtNomeFantasia'];
		$razao_social = $_POST['txtRazaoSocial'];
		$inscricao_estadual = $_POST['txtInscEstadual'];
		$endereco = $_POST['txtEndereco'];
		$telefone = $_POST['txtTelefone'];
		$uf = $_POST['txtUF'];
		$municipio = $_POST['txtMunicipio'];

		if (save($connection, $id, $cnpj, $nome_fantasia, $razao_social, $inscricao_estadual, $endereco, $telefone, $uf, $municipio)) {
			$fornecedores = showAll($connection);
			require 'view_list.php';
		} else {
			$erro = "Houve algum problema com o cadastro, verifique as informações e tente novamente!";
		}
	}

	if(isset($_POST['txtId'])) {
		$cnpj = $_POST['txtId'];
	} else {
		$cnpj = $_GET['codigo'];
	}

	$query = searchId($connection, $id);
	$result = mysqli_fetch_row($query);
	$dados = array(
		"id"=>$result[0],
		"cnpj"=>$result[1], 
		"nome_fantasia"=>$result[2], 
		"razao_social"=>$result[3],
		"inscricao_estadual"=>$result[4],
		"endereco"=>$result[5],
		"telefone"=>$result[6],
		"uf"=>$result[7],
		"municipio"=>$result[8]
	);
	require 'view_register.php';
}

function showAll($connection) {
	$titulo = "Lista de Fornecedores";
	$query = listAll($connection);
	$dados = array();
	
	while($row = mysqli_fetch_array($query)) {
		$dados[] = array(
			"id"=>$row['id'],
			"cnpj"=>$row['cnpj'], 
			"nome_fantasia"=>$row['nome_fantasia'], 
			"razao_social"=>$row['razao_social'],
			"inscricao_estadual"=>$row['inscricao_estadual'],
			"endereco"=>$row['endereco'],
			"telefone"=>$row['telefone'],
			"uf"=>$row['uf'],
			"municipio"=>$row['municipio']
		);
	}
	
	return $dados;
}
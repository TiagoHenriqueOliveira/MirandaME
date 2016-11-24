<?php
require_once 'model.php';

function registerProvider($connection) {
	$titulo = "Cadastro de Fornecedores";
	if (isset($_POST['frmCadFornece'])) {
		$cnpj = $_POST['txtCNPJ'];
		$nome_fantasia = $_POST['txtNomeFantasia'];
		$razao_social = $_POST['txtRazaoSocial'];
		$inscricao_estadual = $_POST['txtInscricaoEstadual'];
		$endereco = $_POST['txtEndereco'];
		$telefone = $_POST['txtTelefone'];
		$uf = $_POST['txtUf'];
		$municipio = $_POST['txtMunicipio'];

		if (save($connection, $cnpj, $nome_fantasia, $razao_social, $inscricao_estadual, $endereco, $telefone, $uf, $municipio)) {
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
	if (isset($_POST['txtCNPJ'])) {
		$cnpj = $_POST['txtCNPJ'];
		$nome_fantasia = $_POST['txtNomeFantasia'];
		$razao_social = $_POST['txtRazaoSocial'];
		$inscricao_estadual = $_POST['txtInscricaoEstadual'];
		$endereco = $_POST['txtEndereco'];
		$telefone = $_POST['txtTelefone'];
		$uf = $_POST['txtUf'];
		$municipio = $_POST['txtMunicipio'];

		if (save($connection, $cnpj, $nome_fantasia, $razao_social, $inscricao_estadual, $endereco, $telefone, $uf, $municipio)) {
			$fornecedores = showAll($connection);
			require 'view_list.php';
		} else {
			$erro = "Houve algum problema com o cadastro, verifique as informações e tente novamente!";
		}
	}

	if(isset($_POST['txtCNPJ'])) {
		$cnpj = $_POST['txtCNPJ'];
	} else {
		$cnpj = $_GET['codigo'];
	}

	$query = searchId($connection, $cnpj);
	$result = mysqli_fetch_row($query);
	$dados = array(
		"cnpj"=>$result[0], 
		"nome_fantasia"=>utf8_decode($result[1]), 
		"razao_social"=>utf8_decode($result[2]),
		"inscricao_estadual"=>$result[3],
		"endereco"=>utf8_decode($result[4]),
		"telefone"=>$result[5],
		"uf"=>utf8_decode($result[6]),
		"municipio"=>utf8_decode($result[7])
	);
	require 'view_register.php';
}

function showAll($connection) {
	$titulo = "Lista de Fornecedores";
	$query = listAll($connection);
	$dados = array();
	
	while($row = mysqli_fetch_array($query)) {
		$dados[] = array(
			"cnpj"=>$row['cnpj'], 
			"nome_fantasia"=>utf8_decode($row['nome_fantasia']), 
			"razao_social"=>utf8_decode($row['razao_social']),
			"inscricao_estadual"=>$row['inscricao_estadual'],
			"endereco"=>utf8_decode($row['endereco']),
			"telefone"=>$row['telefone'],
			"uf"=>utf8_decode($row['uf']),
			"municipio"=>utf8_decode($row['municipio'])
		);
	}
	
	return $dados;
}
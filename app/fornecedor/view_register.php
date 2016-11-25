<?php
include '../header.php';
?>
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="row">
				<div class="col-xs-12">
					<h1 class="page-header">Cadastro de Fornecedores</h1>
					<ol class="breadcrumb">
						<li><i class="glyphicon glyphicon-home"></i><a
							href="../principal.php"> Miranda ME</a></li>
						<li class="active"><i class="fa fa-suitcase fa-fw"></i>
							Cadastrar Fornecedor</li>
					</ol>
				</div>
			</div>
			<div class="panel panel-primary">
				<div class="panel-body">
					<div class="row">
						<div class="col-xs-12">
							<form role="form" action="index.php?route=fornecedor&action=register" method="post" accept-charset="utf-8">
								<input type="hidden" name="frmCadFornece" />
								<div class="form-group col-xs-12">
									<label for="razaoSocial">Razão Social</label>
									<input class="form-control" type="text" name="txtRazaoSocial" value="" id="razaoSocial" maxlength="255" required/>
								</div>
								<div class="form-group col-xs-12">
									<label for="nomeFantasia">Nome Fantasia</label>
									<input class="form-control" type="text" name="txtNomeFantasia" value="" id="nomeFantasia" maxlength="255" required/>
								</div>
								<div class="form-group col-xs-8 col-sm-6 col-md-4 col-lg-3">
									<label for="cnpj">CNPJ</label>
									<input class="form-control" type="text" name="txtCNPJ" value="" id="cnpj" maxlength="18" required/>
								</div>
								<div class="form-group col-xs-8 col-sm-6 col-md-4 col-lg-3">
									<label for="inscEstadual">Inscrição Estadual</label>
									<input class="form-control" type="text" name="txtInscEstadual" value="" id="inscEstadual" maxlength="18" required/>
								</div>
								<div class="form-group col-xs-12">
									<label for="endereco">Endereço</label>
									<input class="form-control" type="text" name="txtEndereco" value="" id="endereco" maxlength="255" required/>
								</div>
								<div class="form-group col-xs-8 col-sm-6 col-md-4 col-lg-3">
									<label for="telefone">Telefone</label>
									<input class="form-control" type="tel" name="txtTelefone" value="" id="telefone" maxlength="16" min="0" max="9" required/>
								</div>
								<div class="form-group col-xs-3 col-sm-2 col-md-2 col-lg-1">
									<label for="uf">UF:</label>
									<input class="form-control" type="text" name="txtUF" value="" id="uf" maxlength="2" required/>
								</div>
								<div class="form-group col-xs-12 col-sm-10 col-md-6 col-lg-8">
									<label for="municipio">Municipio:</label>
									<input class="form-control" type="text" name="txtMunicipio" value="" id="municipio" maxlength="15" required/>
								</div>
								<div class="form-group col-xs-12">
									<button class="btn btn-success" type="submit">Salvar</button>
									<button class="btn btn-warning" type="reset">Cancelar</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
include '../footer.php';
?>
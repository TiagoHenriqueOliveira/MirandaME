<?php
include '../header.php';
?>
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="row">
				<div class="col-xs-12">
					<h1 class="page-header">Cadastro de Funcionários</h1>
					<ol class="breadcrumb">
						<li><i class="glyphicon glyphicon-home"></i><a
							href="../principal.php"> Miranda ME</a></li>
						<li class="active"><i class="fa fa-map-marker fa-fw"></i>
							Cadastrar Funcionário</li>
					</ol>
				</div>
			</div>
			<div class="panel panel-primary">
				<div class="panel-body">
					<div class="row">
						<div class="col-xs-12">
							<form role="form" action="index.php?route=funcionario&action=register" method="post" accept-charset="utf-8">
								<input type="hidden" name="frmCadFunci" />
								<input type="hidden" name="txtId" value="<?=@$dados['id']?>" />
								<div class="form-group col-xs-12">
									<label for="nomeFunci">Nome do Funcionário</label>
									<input class="form-control" type="text" name="txtNome" value="<?=@$dados['nome']?>" id="nomeFunci" maxlength="255" required />
								</div>
								<div class="form-group col-xs-7 col-sm-6 col-md-4 col-lg-3">
									<label for="dtNasc">Data Nascimento</label>
									<input class="form-control" type="date" name="txtDataNasc" value="<?=@$dados['data_nascimento']?>" id="dtNasc" maxlength="10" required />
								</div>
								<div class="form-group col-xs-7 col-sm-6 col-md-4 col-lg-3">
									<label for="naturalidade">Naturalidade</label>
									<input class="form-control" type="text" name="txtNaturalidade" value="<?=@$dados['naturalidade']?>" id="naturalidade" maxlength="50" required />
								</div>
								<div class="form-group col-xs-12">
									<label for="endereco">Endereço</label>
									<input class="form-control" type="text" name="txtEndereco" value="<?=@$dados['endereco']?>" id="endereco" maxlength="255" required />
								</div>
								<div class="form-group col-xs-7 col-sm-6 col-md-4 col-lg-3">
									<label for="telefone">Telefone</label>
									<input class="form-control" type="tel" name="txtTelefone" value="<?=@$dados['telefone']?>" id="telefone" maxlength="15" min="0" max="9" required />
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
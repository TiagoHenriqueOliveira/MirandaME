<?php
include '../header.php';
?>
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<h1 class="page-header">Cadastro de Termos - Responsabilidade</h1>
				<ol class="breadcrumb">
					<li><i class="glyphicon glyphicon-home"></i><a href="../principal.php"> Miranda ME</a></li>
					<li class="active"><i class="fa fa-file-text fa-fw"></i> Termos </li>
					<li class="active"><i class="fa fa-check fa-fw"></i> Cadastrar Termos de Responsabilidade</li>
				</ol>
			</div>
		</div>
		<div class="panel panel-primary">
			<div class="panel-body">
				<div class="row">
					<div class="col-xs-12">
						<form role="form" action="index.php?route=termo/responsabilidade&action=register" method="post" accept-charset="utf-8">
							<input type="hidden" name="frmCadTermoResponsabilidade" />
							<input type="hidden" name="txtId" value="<?=@$dados['id']?>" />
							<div	class="form-group col-xs-12">
								<label for="nomeResponsavel">Nome do Responsável:</label>
								<input class="form-control" type="text" id="nomeResponsavel" name="txtResponsavel" value="<?=@$dados['responsavel']?>" maxlength="255" required />
							</div>
							<div	class="form-group col-xs-8 col-sm-6 col-md-4 col-lg-3">
								<label for="data">Data:</label>
								<input class="form-control" type="date" id="data" name="txtData" value="<?=@$dados['data']?>" maxlength="255" required />
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
<?php
include '../footer.php';
?>
<?php
include '../header.php';
?>
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<h1 class="page-header">Cadastro de Termos - Transferência</h1>
				<ol class="breadcrumb">
					<li><i class="glyphicon glyphicon-home"></i><a href="../principal.php"> Miranda ME</a></li>
					<li class="active"><i class="fa fa-file-text fa-fw"></i> Termos </li>
					<li class="active"><i class="fa fa-book fa-fw"></i> Termo de Transferência</li>
					<li class="active"><i class="fa fa-check fa-fw"></i> Cadastro</li>
				</ol>
			</div>
		</div>
		<div class="panel panel-primary">
			<div class="panel-body">
				<div class="row">
					<div class="col-xs-12">
						<form role="form" action="index.php?route=termo/transferencia&action=register" method="post" accept-charset="utf-8">
							<input type="hidden" name="frmCadTermoTransferencia" />
							<input type="hidden" name="txtId" value="<?=@$dados['id']?>" />
							<div class="form-group col-xs-12">
								<label for="nomeResponsavelAnterior">Nome do Responsável Anterior:</label>
								<select class="form-control" name="txtIdResponsavelAnterior" id="nomeResponsavelAnterior">
								<?php foreach($responsaveis_anteriores as $responsavel_anterior) { ?>
									<option value="<?=$responsavel_anterior['idTermoAnterior']?>"><?=$responsavel_anterior['responsavel_anterior']?></option>
								<?php } ?>
								</select>
							</div>
							<div	class="form-group col-xs-12">
								<label for="nomeResponsavelAtual">Nome do Responsável Atual:</label>
								<input class="form-control" type="text" id="nomeResponsavelAtual" name="txtResponsavelProximo" value="<?=@$dados['responsavel_proximo']?>" maxlength="255" required />
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
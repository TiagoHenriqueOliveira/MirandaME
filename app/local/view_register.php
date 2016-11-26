<?php
include '../header.php';
?>
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<h1 class="page-header">Cadastro de Locais</h1>
				<ol class="breadcrumb">
					<li><i class="glyphicon glyphicon-home"></i><a href="../principal.php">	Miranda ME</a></li>
					<li class="active"><i class="fa fa-map-marker fa-fw"></i> Locais</li>
					<li class="active"><i class="fa fa-check fa-fw"></i> Cadastro</li>
				</ol>
			</div>
		</div>
		<div class="panel panel-primary">
			<div class="panel-body">
				<div class="row">
					<div class="col-xs-12">
						<form role="form" action="index.php?route=local&action=cadastrar"
							method="post" accept-charset="utf-8">
							<input type="hidden" name="frmCadLocal" /> <input type="hidden"
								name="txtId" value="<?=@$dados['id']?>" />
							<div	class="form-group col-xs-12">
								<label for="nome-local">Nome do Local:</label> <input
									class="form-control" type="text" id="nome-local" name="txtNome"
									value="<?=@$dados['nome']?>" size="100" maxlength="255" required />
							</div>
							<div	class="form-group col-xs-12">
								<label for="responsavel">Responsável:</label> <input
									class="form-control" type="text" id="responsavel"
									name="txtResponsavel" value="<?=@$dados['responsavel']?>"
									size="100" maxlength="255" required />
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
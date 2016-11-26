<?php
include '../header.php';
?>
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<h1 class="page-header">Lista de Termos - Transferência</h1>
				<ol class="breadcrumb">
					<li><i class="glyphicon glyphicon-home"></i><a href="../principal.php"> Miranda ME</a></li>
					<li class="active"><i class="fa fa-file-text fa-fw"></i> Termos</li>
					<li class="active"><i class="fa fa-book fa-fw"></i> Termo de Transferência</li>
					<li class="active"><i class="fa fa-list-alt fa-fw"></i> Pesquisar</li>
				</ol>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-body">
				<table width="100%" class="table table-striped table-bordered table-hover"	id="dataTables-example">
					<thead>
						<tr>
							<th><i class="fa fa-user fa-fw"></i> Responsável Anterior</th>
							<th><i class="fa fa-user fa-fw"></i> Responsável Atual</th>
							<th><i class="fa fa-calendar fa-fw"></i> Data</th>
							<th><i class="fa fa-gear fa-fw"></i> Manutenção</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($termos_transferencias as $termo_transferencia) { ?>
						<input type="hidden" name="txtId" value="<?=$termo_transferencia['id']?>" />
						<tr class="odd gradeX">
							<td><?=$termo_transferencia['responsavel_anterior']?></td>
							<td><?=$termo_transferencia['responsavel_proximo']?></td>
							<td><?=$termo_transferencia['data']?></td>
							<td><a href="index.php?route=termo/transferencia&action=alter&codigo=<?=$termo_transferencia['id']?>" class="btn btn-primary">Alterar</a></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php
include '../footer.php';
?>
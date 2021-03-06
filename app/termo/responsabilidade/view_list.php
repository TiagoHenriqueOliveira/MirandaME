<?php
include '../header.php';
?>
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<h1 class="page-header">Lista de Termos - Responsabilidade</h1>
				<ol class="breadcrumb">
					<li><i class="glyphicon glyphicon-home"></i><a href="../principal.php"> Miranda ME</a></li>
					<li class="active"><i class="fa fa-file-text fa-fw"></i> Termos</li>
					<li class="active"><i class="fa fa-book fa-fw"></i> Termo de Responsabilidade</li>
					<li class="active"><i class="fa fa-list-alt fa-fw"></i> Pesquisar</li>
				</ol>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-body">
				<table width="100%" class="table table-striped table-bordered table-hover"	id="dataTables-example">
					<thead>
						<tr>
							<th><i class="fa fa-user fa-fw"></i> Responsável</th>
							<th><i class="fa fa-calendar fa-fw"></i> Data</th>
							<th><i class="fa fa-gear fa-fw"></i> Manutenção</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($termos_responsabilidades as $termo_responsabilidade) { ?>
						<input type="hidden" name="txtId" value="<?=$termo_responsabilidade['id']?>" />
						<tr class="odd gradeX">
							<td><?=$termo_responsabilidade['responsavel']?></td>
							<td><?=$termo_responsabilidade['data']?></td>
							<td><a href="index.php?route=termo/responsabilidade&action=alter&codigo=<?=$termo_responsabilidade['id']?>" class="btn btn-primary">Alterar</a></td>
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
<?php
include '../header.php';
?>
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<h1 class="page-header">Lista de Locais</h1>
				<ol class="breadcrumb">
					<li><i class="glyphicon glyphicon-home"></i><a href="../principal.php">
							Miranda ME</a></li>
					<li class="active"><i class="fa fa-list-alt fa-fw"></i> Pesquisar
						Locais</li>
				</ol>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-body">
				<table width="100%"
					class="table table-striped table-bordered table-hover"
					id="dataTables-example">
					<thead>
						<tr>
							<th><i class="fa fa-user fa-fw"></i> Responsável</th>
							<th><i class="fa fa-map-marker fa-fw"></i> Local</th>
							<th><i class="fa fa-gear fa-fw"></i> Manutenção</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($locais as $local) { ?>
						<input type="hidden" name="txtId" value="<?=$local['id']?>" />
						<tr class="odd gradeX">
							<td><?=$local['responsavel']?></td>
							<td><?=$local['nome']?></td>
							<td><a href="index.php?route=local&action=alterar&codigo=<?=$local['id']?>" class="btn btn-primary">Alterar</a></td>
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
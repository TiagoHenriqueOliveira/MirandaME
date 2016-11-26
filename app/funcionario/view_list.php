<?php
include '../header.php';
?>
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<h1 class="page-header">Lista de Funcionários</h1>
				<ol class="breadcrumb">
					<li><i class="glyphicon glyphicon-home"></i><a href="../principal.php">	Miranda ME</a></li>
					<li class="active"><i class="fa fa-users fa-fw"></i> Funcionários</li>
					<li class="active"><i class="fa fa-list-alt fa-fw"></i> Pesquisar</li>
				</ol>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-body">
				<table width="100%"
					class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>
						<tr>
							<th><i class="fa fa-book fa-fw"></i> Matricula</th>
							<th><i class="fa fa-user fa-fw"></i> Nome</th>
							<th><i class="fa fa-calendar fa-fw"></i> Data de Nascimento</th>
							<th><i class="fa fa-map-marker fa-fw"></i> Naturalidade</th>
							<th><i class="glyphicon glyphicon-road"></i> Endereço</th>
							<th><i class="fa fa-phone fa-fw"></i> Telefone</th>
							<th><i class="fa fa-gear fa-fw"></i> Manutenção</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($funcionarios as $funcionario) { ?>
						<tr class="odd gradeX">
							<td><?=$funcionario['id']?></td>
							<td><?=$funcionario['nome']?></td>
							<td><?=$funcionario['data_nascimento']?></td>
							<td><?=$funcionario['endereco']?></td>
							<td><?=$funcionario['naturalidade']?></td>
							<td><?=$funcionario['telefone']?></td>
							<td><a href="index.php?route=funcionario&action=alter&codigo=<?=$funcionario['id']?>" class="btn btn-primary">Alterar</a></td>
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
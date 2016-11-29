<?php
include '../header.php';
?>
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12">
				<h1 class="page-header">Lista de Fornecedores</h1>
				<ol class="breadcrumb">
					<li><i class="glyphicon glyphicon-home"></i><a href="../principal.php">	Miranda ME</a></li>
					<li class="active"><i class="fa fa-list-alt fa-fw"></i> Pesquisar Fornecedor</li>
				</ol>
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-body">
				<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
					<thead>
						<tr>
							<th><i class="fa fa-user fa-fw"></i> Razão Social</th>
							<th><i class="fa fa-user fa-fw"></i> Nome Fantasia</th>
							<th><i class="fa fa-book fa-fw"></i> CNPJ</th>
							<th><i class="fa fa-book fa-fw"></i> Inscrição Estadual</th>
							<th><i class="glyphicon glyphicon-road"></i> Endereço</th>
							<th><i class="fa fa-phone fa-fw"></i> Telefone</th>
							<th><i class="fa fa-map-marker fa-fw"></i> UF</th>
							<th><i class="fa fa-map-marker fa-fw"></i> Municipio</th>
							<th><i class="fa fa-gear fa-fw"></i> Manutenção</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($fornecedores as $fornecedor) { ?>
						<input type="hidden" name="txtId" value="<?=$fornecedor['id']?>" />
						<tr class="odd gradeX">
							<td><?=$fornecedor['razao_social']?></td>
							<td><?=$fornecedor['nome_fantasia']?></td>
							<td><?=$fornecedor['cnpj']?></td>
							<td><?=$fornecedor['inscricao_estadual']?></td>
							<td><?=$fornecedor['endereco']?></td>
							<td><?=$fornecedor['telefone']?></td>
							<td><?=$fornecedor['uf']?></td>
							<td><?=$fornecedor['municipio']?></td>
							<td><a href="index.php?route=fornecedor&action=alter&codigo=<?=$fornecedor['id']?>" class="btn btn-primary">Alterar</a></td>
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
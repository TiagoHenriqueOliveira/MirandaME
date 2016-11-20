<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8" />
	<title><?=$titulo?></title>
</head>
<body>
	<h1>Listando todos os locais</h1>
	<?php if(isset($return)) { ?>
		<h2><?=$return?></h2>
	<?php } ?>
	<p><a href="index.php?route=local&action=cadastrar">Cadastrar Local</a></p>
	
	<table border="1" cellpadding="5" cellspacing="5" width="550">
			<tr>
				<td>ID</td>
				<td>Nome</td>
				<td>Responsável</td>
			</tr>
			<?php foreach($locais as $local) { ?>
				<tr>
					<td><?=$local['id']?></td>
					<td><?=$local['nome']?></td>
					<td><?=$local['responsavel']?></td>
					<td><a href="index.php?route=local&action=alterar&codigo=<?=$local['id']?>">Alterar</a></td>
				</tr>
			<?php } ?>
		</table>
</body>
</html>
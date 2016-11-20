<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8" />
	<title><?=$titulo?></title>
</head>
<body>
	<h1>Cadastrando locais</h1>
	<?php if(isset($erro)) { ?>
		<h2><?=$erro?></h2>
	<?php } ?>
	<form action="index.php?route=local&action=cadastrar" method="post">
		<input type="hidden" name="frmCadLocal" />
		<input type="hidden" name="txtId" value="<?=@$dados['id']?>" />
		<p>Nome:</p>
		<p><input type="text" name="txtNome" value="<?=@$dados['nome']?>" /></p>
		<p>Responsável:</p>
		<p><input type="text" name="txtResponsavel" value="<?=@$dados['responsavel']?>" /></p>
		<p><input type="submit" value="Cadastrar" /></p>
	</form>
</body>
</html>
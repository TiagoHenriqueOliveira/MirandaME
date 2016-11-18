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
	<h3><?=$resultado?></h3>
	<form action="index.php?route=local&action=cadastrar" method="post" name="frmCadLocal">
		<input type="hidden" name="txtId" />
		<p>Nome:</p>
		<p><input type="text" name="txtNome" /></p>
		<p>Responsável:</p>
		<p><input type="text" name="txtResponsavel" /></p>
		<p><input type="submit" value="Cadastrar" /></p>
	</form>
</body>
</html>
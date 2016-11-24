<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="Trabalho do IFSC - Polo Xanxerê" content="">
		<meta name="Tiago Henrique Oliveira" content="">
		<title>Miranda ME - Gestão Patrimonial</title>
		<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
		<link href="../dist/css/sb-admin-2.css" rel="stylesheet">
		<link href="../vendor/morrisjs/morris.css" rel="stylesheet">
		<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="wrapper">
			<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="../principal.php">Miranda ME</a>
				</div>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><li class="dropdown"><li class="dropdown">
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-user fa-fw"></i>Usuario <i class="fa fa-caret-down"></i> </a>
						<ul class="dropdown-menu dropdown-user">
							<li>
								<a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
							</li>
						</ul>
					</li>
				</ul>
				<div class="navbar-default sidebar" role="navigation">
					<div class="sidebar-nav navbar-collapse">
						<ul class="nav" id="side-menu">
							<li>
								<a href="#"><i class="fa fa-institution fa-fw"></i> Bens <span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="app/index.php?route=bem&action=register"><i class="fa fa-check fa-fw"></i> Cadastrar </a>
									</li>
									<li>
										<a href="app/index.php?route=bem"><i class="fa fa-search fa-fw"></i> Pesquisar </a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#"><i class="fa fa-suitcase fa-fw"></i> Fornecedores <span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="app/index.php?route=fornecedor&action=register"><i class="fa fa-check fa-fw"></i> Cadastrar </a>
									</li>
									<li>
										<a href="app/index.php?route=fornecedor"><i class="fa fa-search fa-fw"></i> Pesquisar </a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#"><i class="fa fa-users fa-fw"></i> Funcionários <span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="index.php?route=funcionario&action=register"><i class="fa fa-check fa-fw"></i> Cadastrar </a>
									</li>
									<li>
										<a href="index.php?route=funcionario"><i class="fa fa-search fa-fw"></i> Pesquisar </a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#"><i class="fa fa-map-marker fa-fw"></i> Locais <span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="index.php?route=local&action=cadastrar"><i class="fa fa-check fa-fw"></i> Cadastrar </a>
									</li>
									<li>
										<a href="index.php?route=local"><i class="fa fa-search fa-fw"></i> Pesquisar </a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#"><i class="fa fa-file-text fa-fw"></i> Termos <span class="fa arrow"></span></a>
								<ul class="nav nav-second-level">
									<li>
										<a href="#">Responsabilidade <span class="fa arrow"></span></a>
										<ul class="nav nav-third-level">
											<li>
												<a href="app/index.php?route=termo/responsabilidade&action=register"><i class="fa fa-check fa-fw"></i> Cadastrar </a>
											</li>
											<li>
												<a href="app/index.php?route=termo/responsabilidade"><i class="fa fa-search fa-fw"></i> Pesquisar </a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">Transferência <span class="fa arrow"></span></a>
										<ul class="nav nav-third-level">
											<li>
												<a href="app/index.php?route=termo/transferencia&action=register"><i class="fa fa-check fa-fw"></i> Cadastrar </a>
											</li>
											<li>
												<a href="app/index.php?route=termo/transferencia#"><i class="fa fa-search fa-fw"></i> Pesquisar </a>
											</li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
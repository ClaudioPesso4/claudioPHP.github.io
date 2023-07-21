<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Portifolio</title>
	<link rel="stylesheet" type="text/css" href="<?php echo INCLUDE_PATH; ?>fontawesome/css/all.css">
	<link href="<?php echo INCLUDE_PATH; ?>https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH; ?>estilos/style.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="keywords" content="palavras-chave,do,meu,site">
	<meta name="description" content="Descrição do meu website">
	<meta charset="UTF-8" />
</head>
<body>

	<header>
		<div class="center">
			<div class="logo left"><a href="/">Logomarca</a></div><!--logo-->
			<nav class="desktop right">
				<ul>
					<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
			<nav class="mobile right">
				<div class="botao-menu-mobile">
					<i class="fa fa-bars" aria-hidden="true"></i>
				</div><!--botao-menu-mobile-->
				<ul>
				<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
					<li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
				</ul>
			</nav>
			<div class="clear"></div>
		</div><!--center-->
	</header>

	<?php

	$url = isset($_GET['url']) ? $_GET['url'] : 'home';

	if(file_exists('pages/'.$url.'.php')){
		include('pages/'.$url.'.php');
	} else {
		$pagina404 = true;
		include('pages/404.php');
	}

	?>
	
	<footer <?php if(isset($pagina404) && $pagina404 == true) echo 'class="fixed"';?>>
		<div class="center">
		<p>Todos os direitos reservados</p>
		</div><!--center-->
	</footer>
	<script type="text/javascript" src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo INCLUDE_PATH; ?>js/scripts.js"></script>
</body>
</HTML>
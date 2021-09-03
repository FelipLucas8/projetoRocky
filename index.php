<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE-Edge"> <!--meta tag para maior compatibilidade com o Internet Explorer e Edge-->
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet"  href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Agência de Marketing Digital | Alumínio-SP</title>
	<link rel="icon" href="http://localhost/Projeto_Estagio_Rocky/favicon.ico" type="image/x-icon" />
	<meta charset="utf-8">
	<meta name="kewywords" content="sites,landing page, websites, marketing digital, consultoria digital">
	<meta name="author" content="Daddyontop"> 
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
</head>
<body>


	
	<header>
		<div class="container">
			<div class="menu-top">
			<div class="logo" alt="Daddyontop logo"><a href="http://localhost/Projeto_Estagio_Rocky/">Daddyontop</a></div><!--logo-->
			<nav class="desktop">
				<ul>
					<li><a href="http://localhost/Projeto_Estagio_Rocky/sobre">Sobre</a></li>
					<li><a href="http://localhost/Projeto_Estagio_Rocky/servicos">Serviços</a></li>
					<li><a href="http://localhost/Projeto_Estagio_Rocky/contato">Contato</a></li>
					<li class="btn-nav"><a href="http://localhost/Projeto_Estagio_Rocky/contato">Quero um orçamento!</a></li>
				</ul>
			</nav><!--desktop-->

			<nav class="mobile">
			<h3><i class="fa fa-bars"></i></h3>
				<ul>
					<li><a href="http://localhost/Projeto_Estagio_Rocky/sobre">Sobre</a></li>
					<li><a href="http://localhost/Projeto_Estagio_Rocky/servicos">Serviços</a></li>
					<li><a href="http://localhost/Projeto_Estagio_Rocky/contato">Contato</a></li>
					<li class="btn-nav"><a href="http://localhost/Projeto_Estagio_Rocky/contato">Quero um orçamento</a></li>
				</ul>
			</nav><!--mobile-->

			<div class="clear"></div><!--clear-->
		</div><!--menu-top-->
		</div><!--container-->
	</header>


	<?php

		$url = isset($_GET['url']) ? $_GET['url'] : 'home';

		if(file_exists('pages/'.$url.'.php')){
			include('pages/'.$url.'.php');
		}else{
			$pagina404 = true;
			include('pages/404.php');
		}

	?>
	

	<footer <?php if(isset($pagina404) && $pagina404 = true) echo 'class="fixed"'; ?>>
		<div class="container">
			<div class="box-footer">
				<h2>Endereço</h2>
				<p>Rua José Jovino da Silva, 178 - Jardim Olidel, Alumínio/SP, 18125-000, Brasil</p>
			</div><!--box-footer-->
			<div class="box-footer">
				<h2>Telefone</h2>
				<p>(11)99999-8888</p>
			</div><!--box-footer-->
			<div class="box-footer">
				<h2>Receba nossas news</h2>
				<form>
					<input type="text" placeholder="E-mail..."><button type="submit"><i class="fa fa-paper-plane-o"></i></button>
				</form>
			</div><!--box-footer-->
		</div><!--container-->

		<a class="irtopo" href="#"> <i class="fa fa-level-up" aria-hidden="true"></i></a>
	</footer>
 
	<script src="js/jquery.js"></script>
	<script src="js/scripts.js"></script>
</body>
</html>
<?php include('config.php'); ?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="Descrição do meu website">
   <meta name="Keywords" content="fastforward.com">
   <link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet" />
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300, 400, 700" rel="stylesheet">
   <script src="https://kit.fontawesome.com/0ac4ca22f0.js" crossorigin="anonymous"></script>

   <title>Fast Forward</title>
</head>
<body>
<base base="<?php echo INCLUDE_PATH; ?>" />
	<?php
		$url = isset($_GET['url']) ? $_GET['url'] : 'home';
		switch ($url){
			case 'sobre':
			echo '<target target="sobre" />';
			break;

			case 'servicos':
			echo '<target target="servicos" />';
			break;
		}
	?>
	<div class="sucesso">Formulário enviado com sucesso!</div>
	<div class="overlay-loading">
		<img src="<?php echo INCLUDE_PATH ?>images/ajax-loader.gif">
	</div><!--Overlay-loading-->

      <header>
	   <div class="center">
		<div class="logo left"><a href="/">Fast Forward Idiomas</a></div><!--logo-->
		<nav class="desktop right">
			<ul>
				<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
				<li><a realtime="contato" href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
			</ul>
		</nav>
		 <nav class="mobile right">
		 	<div class="botao-menu-mobile">
		      <i class="fa-solid fa-bars"></i>
		 	</div>
		 	<ul>
				<li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
				<li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
				<li><a realtime href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
			</ul>
		 </nav>
		 <div class="clear"></div><!--clear-->
	        </div><!--center-->
        </header>

   <div class="container-principal">
   <?php

       $url = isset($_GET['url']) ? $_GET['url'] : 'home';

       if(file_exists('pages/'.$url.'.php')){
       	 include('pages/'.$url.'.php');
       } else{
       	//Podemos fazer o que quiser, pois a página não existe.
       	$pagina404 = true;
       	include('pages/404.php');
       }

   ?>
   </div><!--container-principal-->

	<footer <?php if(isset($pagina404) && $pagina404 ==true) echo 'class="fixeds"';?>>
		<div class="center">
		<p>Todos os direitos resevados</p>
	        </div><!--center-->
	</footer>
	
   <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
   <script src="<?php echo INCLUDE_PATH; ?>js/script.js"></script>
   <?php
       if ($url == 'home' || $url == ''){
   ?>
   <script src="<?php echo INCLUDE_PATH; ?>js/slider.js"></script>
<?php } ?>
<?php
	if ($url == 'contato'){
?>
<?php } ?>
    <script src="<?php echo INCLUDE_PATH; ?>js/formularios.js"></script>
</body>
</html>
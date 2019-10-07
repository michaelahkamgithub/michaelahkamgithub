<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title><?php bloginfo('name'); ?></title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Varela+Round" rel="stylesheet">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/layout.css"/>
		
		<?php wp_head(); ?>
	</head>

	<body>	
		<!-- Entête -->
		<header>
			<div class="container">
				<img id="logo" src="<?php bloginfo('stylesheet_directory'); ?>/img/mtl-icon-logo-fr.png">

				<!-- Navigation -->
				<?php wp_nav_menu( 
					array(
						'theme_location'	=> 	'menu_principal',
						'container'		 	=>	'nav')
				); ?>

			</div>
		</header> <!-- Fin-Entête -->
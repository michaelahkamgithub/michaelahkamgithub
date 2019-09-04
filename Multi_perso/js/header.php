<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>

    <!-- Bootstrap -->
    <?php wp_head(); ?>


  </head>
  <body>

  	<!-- Entête/navabar-->
	<header>
		<nav class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="index.html"><h1>AEC Design Web</h1></a>
						</div>
						<div id="navmenu">
							<?php wp_nav_menu( 
								array(	
									'theme_location' 		=> 'menu_principal', 
									'container_class'      	=> 'menu',
									'container'				=> 'nav'

									)
							); ?>
						</div>		
					</div>
				</div>
			</div>
		</nav>
	</header>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>

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
						<div class="navbar-brand">
							<a href="<?php echo home_url( '/' ); ?>"><h1>AEC Design Web</h1></a>
						</div>
						<div class="navbar-collapse collapse">
							<div class="menu">
								<?php wp_nav_menu( 
								array(	
									'theme_location' 		=> 'menu_principal', 
									'container_class'      	=> 'menu',
									'menu_class'			=> 'nav nav-tabs'
									)
								); ?>
							</div>	
						</div>
					</div>		
				</div>
			</div>
		</nav>
	</header>
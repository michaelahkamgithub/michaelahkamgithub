<?php

add_theme_support('post-thumbnails'); // Ajout du support des images à la une

set_post_thumbnail_size( 150, 150, true); // Taille par défaut des images la une


// FONCTION LE ACTIVER L'OPTION DU MENU + Déclarer l'emplacement
function enregistrer_menu() { 
	register_nav_menu('menu_principal', 'Cochez ici pour Menu principal');
}
add_action('init', 'enregistrer_menu');

//ACTIVER LES WIDGETS DANS L'ADMIN

function enregistrer_widgets() { 
	
	register_sidebar( array(
			'name'          => 'Barre latérale',
			'id'            => 'right_1',
		) );

	}
add_action( 'widgets_init', 'enregistrer_widgets' );


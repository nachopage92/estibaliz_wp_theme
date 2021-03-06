<?php
function load_child_stylesheet() {
    wp_enqueue_style( 'layout', get_stylesheet_directory_uri() . '/style.css' );
	
	if ( is_front_page( ) ) {
		wp_enqueue_style( 'home-style', get_stylesheet_directory_uri() . '/style-home.css' );
	}
	if ( is_page( 'cine' ) ) {
		wp_enqueue_style( 'cine-style', get_stylesheet_directory_uri() . '/style-cine.css' );
	}
	if ( is_page( 'audiovisual' ) ) {
		wp_enqueue_style( 'av-style', get_stylesheet_directory_uri() . '/style-av.css' );
	}
	if ( is_page( 'artes-escenicas' ) ) {
		wp_enqueue_style( 'aesc-style', get_stylesheet_directory_uri() . '/style-aesc.css' );
	}
	if ( is_page( 'contacto' ) ) {
		wp_enqueue_style( 'contacto-style', get_stylesheet_directory_uri() . '/style-contacto.css' );
	}
	wp_enqueue_style( 'FitVids-style', get_stylesheet_directory_uri() . '/FitVids.css' );
	wp_enqueue_style( 'Accordion_style', get_stylesheet_directory_uri() . '/pure_js_accordion.css' );
	wp_enqueue_style( 'fullpage-style', get_stylesheet_directory_uri() . '/fullPage.js/dist/fullpage.css' );
}
add_action( 'wp_enqueue_scripts', 'load_child_stylesheet' );
?>

<?php
function my_theme_scripts() {
	wp_enqueue_script( 'fullpage', get_stylesheet_directory_uri() . '/fullPage.js/dist/fullpage.js' , '','1.0.0',true );
	wp_enqueue_script( 'Creditos', get_stylesheet_directory_uri() . '/creditos.js' , '','1.0.0',true );
	wp_enqueue_script( 'Creditos-aesc', get_stylesheet_directory_uri() . '/creditos-aesc.js' , '','1.0.0',true );
	wp_enqueue_script( 'Sinopsis', get_stylesheet_directory_uri() . '/sinopsis.js' , '','1.0.0',true );
	wp_enqueue_script( 'Sinopsis-av', get_stylesheet_directory_uri() . '/sinopsis-av.js' , '','1.0.0',true );
	wp_enqueue_script( 'Sinopsis-aesc', get_stylesheet_directory_uri() . '/sinopsis-aesc.js' , '','1.0.0',true );
	wp_enqueue_script( 'Awards', get_stylesheet_directory_uri() . '/awards.js' , '','1.0.0',true );
	wp_enqueue_script( 'Fit-Vid', get_stylesheet_directory_uri() . '/FitVids.js' , '','1.0.0',false );
	wp_enqueue_script( 'Accordion', get_stylesheet_directory_uri() . '/pure_js_accordion.js' , '','1.0.0',true );
	if ( is_front_page( ) ) {
		wp_enqueue_script( 'init_fullpage', get_stylesheet_directory_uri() . '/home_fullpage.js' , '','1.0.0',true );
	}
	if ( is_page( 'cine' ) ) {
		wp_enqueue_script( 'cine_fullpage', get_stylesheet_directory_uri() . '/cine_fullpage.js' , '','1.0.0',true );
	}
	if ( is_page( 'audiovisual' ) ) {
		wp_enqueue_script( 'av_fullpage', get_stylesheet_directory_uri() . '/av_fullpage.js' , '','1.0.0',true );
	}
	if ( is_page( 'artes-escenicas' ) ) {
		wp_enqueue_script( 'aesc_fullpage', get_stylesheet_directory_uri() . '/aesc_fullpage.js' , '','1.0.0',true );
	}
	if ( is_page( 'contacto' ) ) {
		wp_enqueue_script( 'contacto_fullpage', get_stylesheet_directory_uri() . '/contacto_fullpage.js' , '','1.0.0',true );
	}
}
add_action( 'wp_enqueue_scripts', 'my_theme_scripts' );
?>

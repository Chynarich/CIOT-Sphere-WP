<?php 

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css');



	wp_enqueue_script( 'font-awelsome', 'https://kit.fontawesome.com/ec70dc1bca.js', array(), '5.0.0', true );
});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');


?>
<?php 
/* 
 * Static.php 
 * enqueue all static stylesht and js 
*/

function welearner_static_scripts() {
	wp_enqueue_style( 'welearner-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_style_add_data( 'welearner-style', 'rtl', 'replace' );
    
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style('theme-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Yantramanav:wght@400;500;700;900&display=swap" rel="stylesheet');
    wp_enqueue_style('theme-fonts-local', get_template_directory_uri().'/assets/fonts/stylesheet.css');
    wp_enqueue_style('fontawesome', get_template_directory_uri().'/assets/css/all.min.css');
    wp_enqueue_style('welearner-theme', get_template_directory_uri().'/assets/css/style.css');


	wp_enqueue_script( 'welearner-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'welearner-scrpt', get_template_directory_uri() . '/assets/js/script.js', array( 'jquery' ), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'welearner_static_scripts' );
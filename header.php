<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package welearner
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'welearner' ); ?></a>

<header class="header">
<nav class="navbar navbar-expand-lg navbar-light welearner-nav">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
		<?php 
		 if(has_custom_logo()) {
			the_custom_logo();
		 }else {
			bloginfo( 'name' );
		 }
		
		 ?>
    <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo03">
	
	<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
					'container'		 => '',
					'menu_class'     => 'navbar-nav mr-auto',
					'fallback_cb'     => false,
				)
			);
			?>  
			
    </div>
  </div>
</nav>
<div class="header-main-content">
	<div class="container">
		<div class="header-content-area">
		<img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/header/content-icon.png'); ?>" alt="icon" class="content-icon-1 position-absolute">
		<div class="contnt-dot position-absolute"></div>
		<?php 
		 
		 $heading_title = '';
		 $heading_description = '';

		 if(defined('FW')) {
			$heading_title = fw_get_db_customizer_option('heading_title');
			$heading_description = fw_get_db_customizer_option('heading_description');
		 }
		
		?> 
		<h1><?php echo esc_html($heading_title); ?> </h1>
		<p><?php echo esc_html($heading_description); ?> </p>
		
		<!--Header form-->
		<form method="GET" class="course-search-form" action="<?php echo esc_url(home_url( '/' )); ?>">
			<input type="search" placeholder="<?php echo esc_attr__('What do you want to learn?', 'welearner') ?>" class="course-search form-control rounded-0" value="<?php echo get_search_query() ?>" name="s">
			<input type="hidden" name="post_type" value="courses" />
			<button type="submit" class="course-search-btn btn position-absolute"><?php echo esc_html__('Search', 'welearner') ?> </button>
		</form>
	
	</div>
	
       
		<img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/Images.png'); ?>" alt="main image" class="main-image position-absolute">
		<img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/header/donted.png'); ?>" alt="dotted" class="dotted-image-botton position-absolute">
		<img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/header/letmain-crcile.png'); ?>" alt="dotted" class="left-image-cricle position-absolute">
		<img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/header/botton-dont.png'); ?>" alt="dotted" class="botton-dot-with-cricle position-absolute">
		<img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/header/right-captul.png'); ?>" alt="dotted" class="right-captual-dot position-absolute">
		 <div class="top-rgiht-image position-absolute">
		    <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/header/top_rgiht.png'); ?>" alt="top_" class="top-right">
		 </div>
		

</div>
</header>	

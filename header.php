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
    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
		<?php 
		 if(has_custom_logo()) {
			the_custom_logo();
		 }else {
			bloginfo( 'name' );
		 }
		
		 ?>
	</a>
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
		<h1>Discover a new way of learning </h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper dapibus turpis vel pellentesque. </p>
		
		<!--Header form-->
		<form action="" class="course-search-form">
			<input type="search" placeholder="What do you want to learn?" class="course-search form-control rounded-0">
			<button type="search" class="course-search-btn btn position-absolute">Search</button>
		</form>
	
	</div>
	
       <!-- Main image --->
		<img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/header/images.png'); ?>" alt="main image" class="main-image position-absolute">
		<img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/header/donted.png'); ?>" alt="dotted" class="dotted-image-botton position-absolute">
		<img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/header/letmain-crcile.png'); ?>" alt="dotted" class="left-image-cricle position-absolute">
		<img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/header/botton-dont.png'); ?>" alt="dotted" class="botton-dot-with-cricle position-absolute">
		<img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/header/right-captul.png'); ?>" alt="dotted" class="right-captual-dot position-absolute">
		 <div class="top-rgiht-image position-absolute">
		    <img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/header/top_rgiht.png'); ?>" alt="top_" class="top-right">
		 </div>
		
	</div>
</div>
</header>	

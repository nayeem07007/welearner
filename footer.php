<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package welearner
 */

?>

	<footer id="colophon" class="site-footer">
	   <img src="<?php echo get_template_directory_uri().'/assets/img/footer/f1.png'; ?>" alt="footer icon 1" class="position-absolute f-icon1">
	   <img src="<?php echo get_template_directory_uri().'/assets/img/footer/f2.png'; ?>" alt="footer icon 2" class="position-absolute f-icon3">
	   <img src="<?php echo get_template_directory_uri().'/assets/img/footer/f3.png'; ?>" alt="footer icon 2" class="position-absolute f-icon2">
		<div class="container position-relative">

		<img src="<?php echo get_template_directory_uri().'/assets/img/footer/f4.png'; ?>" alt="footer icon 1" class="position-absolute f-icon4">
	   <img src="<?php echo get_template_directory_uri().'/assets/img/footer/f5.png'; ?>" alt="footer icon 2" class="position-absolute f-icon5">
		
	   <div class="row">
				<div class="col-sm-3">
					<div class="footer-static-content">
					<?php if(get_option('footer_logo') != '') : ?> 
						<a href="<?php echo esc_url(home_url('/')); ?>">
						<img src="<?php echo esc_url(get_option('footer_logo') );?>" alt="footer logo">
						</a>
					<?php endif; ?> 
					<?php if(get_option('footer_text') != '') : ?> 	
						<p><?php echo wp_kses_post(get_option('footer_text')) ?>  </p>
					<?php endif; ?> 
					  <?php 
					  
					   $facebook = get_option('facebook_link');
					   $twitter = get_option('twitter_link');
					   $linkdin = get_option('linkdin_link');
					 
					   if($facebook != '' || $twitter != '' || $linkdin != '') :
					 ?> 
                         <ul class="footer-social">
						   <?php if($facebook != '') : ?> 
							 <li><a href="<?php echo esc_url($facebook); ?>"><i class="fab fa-facebook-f"></i></a></li>
						   <?php endif; ?>

						   <?php if($linkdin != '') : ?> 
							 <li><a href="<?php echo esc_url($linkdin); ?>"><i class="fab fa-linkedin-in"></i></a></li>
						   <?php endif; ?> 	
						   
						   <?php if($twitter != '') : ?> 
							 <li><a href="<?php echo esc_url($twitter); ?>"><i class="fab fa-twitter"></i></a></li>
						   <?php endif; ?> 
						   
						 </ul>
					   <?php endif; ?> 	 
					</div>
				</div>
				<div class="col-sm-9">
					<div class="footer-widget-wrapper">
						<div class="row">
							<?php 
								if(is_active_sidebar('footer-1')){
									dynamic_sidebar('footer-1');
								}
								if(is_active_sidebar('footer-2')){
									dynamic_sidebar('footer-2');
								}
								if(is_active_sidebar('footer-3')){
									dynamic_sidebar('footer-3');
								}
								if(is_active_sidebar('footer-4')){
									dynamic_sidebar('footer-4');
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

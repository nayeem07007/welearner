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
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="footer-static-content">
						<a href="">
						<img src="<?php echo esc_url(get_template_directory_uri().'/assets/img/footer-logo.png'); ?>" alt="">
						</a>
						<p>Lorem ipsum dolor sit amet, consectetur 
adipiscing elit. Sed justo nulla, </p>
                         <ul class="footer-social">
							 <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
							 <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
							 <li><a href=""><i class="fab fa-twitter"></i></a></li>
						 </ul>
					</div>
				</div>
				<div class="col-sm-9">
					<div class="footer-widget-wrapper">
						<div class="row">
							<div class="col-sm-3">
								<div class="footer-widget-wrapper">
									<h3 class="footer-widgets-title">Company</h3>
									<ul>
										<li><a href="">About Us</a></li>
										<li><a href="">Career</a></li>
										<li><a href="">Blog</a></li>
										<li><a href="">Affiliate</a></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-3">
							<div class="footer-widget-wrapper">
									<h3 class="footer-widgets-title">Company</h3>
									<ul>
										<li><a href="">About Us</a></li>
										<li><a href="">Career</a></li>
										<li><a href="">Blog</a></li>
										<li><a href="">Affiliate</a></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-3">
							<div class="footer-widget-wrapper">
									<h3 class="footer-widgets-title">Company</h3>
									<ul>
										<li><a href="">About Us</a></li>
										<li><a href="">Career</a></li>
										<li><a href="">Blog</a></li>
										<li><a href="">Affiliate</a></li>
									</ul>
								</div>
							</div>
							<div class="col-sm-3">
							<div class="footer-widget-wrapper">
									<h3 class="footer-widgets-title">Company</h3>
									<ul>
										<li><a href="">About Us</a></li>
										<li><a href="">Career</a></li>
										<li><a href="">Blog</a></li>
										<li><a href="">Affiliate</a></li>
									</ul>
								</div>
							</div>
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

<?php 
$address = get_field('address', 'options');
$phone = get_field('phone', 'options');
$seo_data = get_option('wpseo_social');
?>

<footer>
	<div class="footer-container">
		<div class="container">
			<a href="<?php echo home_url('/'); ?>" title="<?php echo get_bloginfo( 'name' ); ?>">
				<img class="footer-logo" src="<?php echo  $GLOBALS['src'] ?>/dist/img/branding/rallio.svg" alt="">
			</a>

			<ul class="footer-menu">
				<?php wp_nav_menu( array( 
				'theme_location' => 'footer_menu', 
				'menu_class' => '',
				'items_wrap' => '%3$s',
				'container' => '',
				"container_class" => ''
				) ); ?>
			</ul>

			<div class="contact-container">
				<div class="contact">
					<img src="<?php echo $GLOBALS['src']; ?>/dist/img/icons/ADDRESS.svg" alt="<?php _e('addres', 'rallio'); ?>">
					<p><?php echo $address; ?></p>
				</div>
				<div class="contact">
					<img src="<?php echo $GLOBALS['src']; ?>/dist/img/icons/PHONE.svg" alt="<?php _e('phone', 'rallio'); ?>">
					<p><?php echo $phone; ?></p>
				</div>
				<div class="contact socials">
					<a target="_blank" rel="noopener noreferrer" href="<?php echo $seo_data['facebook_site']; ?>"><img src="<?php echo $GLOBALS['src']; ?>/dist/img/icons/FACEBOOK.svg" alt="<?php _e('Facebook', 'rallio'); ?>"></a>
					<a target="_blank" rel="noopener noreferrer" href="<?php echo $seo_data['linkedin_url']; ?>"><img src="<?php echo $GLOBALS['src']; ?>/dist/img/icons/LINKEDIN.svg" alt="<?php _e('LinkedIn', 'rallio'); ?>"></a>
					<a target="_blank" rel="noopener noreferrer" href="https://twitter.com/<?php echo $seo_data['twitter_site']; ?>"><img src="<?php echo $GLOBALS['src']; ?>/dist/img/icons/TWITTER.svg" alt="<?php _e('Twitter', 'rallio'); ?>"></a>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-footer">
		<div class="container">
			<p>Copyright © 2019 Rallio – All rights reserved.</p><p> Designed and built by <a href="https://adchitects.co/websites">ADCHITECTS</a> in time and budget.</p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>  

</body>
</html>
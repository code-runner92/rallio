<?php get_header(); 
$frontpage_id = get_option( 'page_on_front' );
?>

<section class="p404">
	<div class="container">
		<h1 class="header--line"><span><?php _e('Page not found', 'letsdayout'); ?></span></h1>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo get_the_title($frontpage_id); ?>" class="btn">
			<?php echo get_the_title($frontpage_id); ?>
		</a>
	</div>
</section>

<?php get_footer(); ?>
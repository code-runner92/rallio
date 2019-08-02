<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 

	$title = get_the_title();
	$content = get_the_content(); ?>

	<section class="page">
		<div class="container page-container">
			<?php echo $title; ?>
		</div>
	</section>

<?php endwhile; endif; ?>
<?php get_footer(); ?>
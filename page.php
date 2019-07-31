<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 

	$title = get_the_title();
	$content = get_the_content(); ?>
	<section class="section--contact section--padding" id="content">
		<div class="wrapper">
			<h1 class="header--line header--bmargin"><span><?php echo $title; ?></span></h1>
			<div class="text"><?php echo $content; ?></div>
		</div>
	</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
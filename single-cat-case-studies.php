<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
<?php
global $post;
$thumbnail_link = get_the_post_thumbnail_url($post);
$title = get_the_title($post);
$date = get_the_date();
$author = get_author_name();
$content = get_the_content();
?>

<div class="post-hero" style="background-image: url('<?php echo $thumbnail_link; ?>')"></div>

<div class="post-container">

	<div class="container post">
		<p class="post-date"><?php echo $date; ?></p>
		<h1 class="post-title"><?php echo $title; ?></h1>
		<p class="post-author">by <span><?php echo $author; ?></span></p>

		<div class="post-content">
			<?php echo $content; ?>
		</div>
	</div>
	
	<div class="circles"></div>
	
</div>

<?php
$cta_box = get_field('case_studies_cta', 'options');
$cta_header = $cta_box['header'];
$cta_slogan = $cta_box['slogan'];
$cta_text = $cta_box['text_under_the_form'];
?>

<section class="cta cta_case_studies">
	<div class="container">
		<p class="cta__header">
			<?php echo $cta_header; ?>
		</p>
		<h2 class="cta__caller">
			<?php echo $cta_slogan; ?>
		</h2>
		<form action="">
			<input type="text">
			<label for="">Enter you e-mail address</label>
			<button class="cta__button">Submit</button>
		</form>
		<div class="cta__text">
			<?php echo $cta_text; ?>
		</div>
	</div>
</section>

<?php endwhile;endif; ?>
<?php get_footer(); ?>

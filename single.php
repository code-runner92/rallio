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

<div class="container post">
	<p class="post-date"><?php echo $date; ?></p>
	<h1 class="post-title"><?php echo $title; ?></h1>
	<p class="post-author">by <span><?php echo $author; ?></span></p>

	<div class="post-content">
		<?php echo $content; ?>
	</div>
</div>

<section class="meta">
	meta section
</section>

<?php endwhile;endif; ?>
<?php get_footer(); ?>

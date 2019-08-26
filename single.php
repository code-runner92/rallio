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

<?php if ($thumbnail_link) { ?>
	<div class="post-hero" style="background-image: url('<?php echo $thumbnail_link; ?>')"></div>
<?php } else { ?>
	<div class="post-hero post-hero-placeholder" style="background-image: url('<?php echo  $GLOBALS['src'] ?>/dist/img/placeholder.jpg')"></div>
<?php } ?>

<div class="post-container">

	<div class="container post">
		<p class="post-date"><?php echo $date; ?></p>
		<h1 class="post-title font-50"><?php echo $title; ?></h1>
		<p class="post-author">by <span><?php echo $author; ?></span></p>

		<div class="post-content">
			<?php echo $content; ?>
		</div>
	</div>

	<?php 
	$categories = get_the_terms( $post, 'category' );
	$tags = get_the_tags($post);
	?>

	<section class="meta">
		<div class="container meta-container">
			<div class="meta-box">
				<span class="meta-title">Categories</span>
				<div class="meta-tags">
					<?php foreach ($categories as $category) { ?>
						<a class="meta-tag" href="<?php echo get_category_link($category); ?>">
							<?php echo $category->name; ?>
						</a>
					<?php }?>
				</div>
			</div>

			<?php if ( $tags ) { ?>
			<div class="meta-box">
				<span class="meta-title">Tags</span>
				<div class="meta-tags">
					<?php foreach ($tags as $tag) { ?>
						<a class="meta-tag" href="<?php echo get_tag_link($tag); ?>">
							<?php echo $tag->name; ?>
						</a>
					<?php }?>
				</div>
			</div>
			<?php } ?>

			<div class="meta-box">
				<span class="meta-title">Author</span>
				<div class="meta-tags">
					<a class="meta-tag" href="<?php echo get_author_posts_url($post->post_author); ?>">
						<?php echo $author; ?>
					</a>
				</div>
			</div>
		</div>
	</section>

	<?php comments_template(); ?>
	
	<div class="circles"></div>
	
</div>

<section class="cta cta_case_studies">
	<div class="container">
		<?php echo do_shortcode('[ctct form="361"]'); ?>
	</div>
</section>

<?php endwhile;endif; ?>
<?php get_footer(); ?>

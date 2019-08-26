<?php /* Page Template Name: Case Studies */ ?>
<?php get_header(); ?>

<?php
$bg_img_url = get_field('case_studies_image');
?>

<div class="case-studies-hero" style="background-image: url('<?php echo $bg_img_url; ?>')"></div>

<div class="container case-studies-container">

	<?php 
	$title = get_the_title();
	?>
	<h1 class="main-header font-50"><?php echo $title; ?></h1>

	<?php 
	$args = array(
	'cat' => '10'
	);
	$query = new WP_Query($args);
	?>

	<div class="row blog-list">
		<?php
		if ( $query->have_posts() ) {

			// Load posts loop.
			while ( $query->have_posts() ) {
				$case_post = $query->the_post();
				$link = get_permalink($case_post);
				$title = get_the_title($case_post);
				$date = get_the_date();
				$thumbnail_link = get_the_post_thumbnail_url($case_post);
				$excerpt = get_the_excerpt();
				?>
				
				<div class="col-12 col-lg-4 blog-list__post">
					
					<div class="single-post-container">	
						<a href="<?php echo $link; ?>">
							<div class="post__img" style="background-image: url('<?php echo $thumbnail_link ?>')"></div>
						</a>
							<div class="post__desc">
								<span class="post__date"><?php echo $date; ?></span>
								<a href="<?php echo $link; ?>">
									<h2 class="post__title"><?php echo $title; ?></h2>
								</a>
								<p class="post__excerpt"><?php echo $excerpt; ?></p>
								<a class="read-more" href="<?php echo $link; ?>">Read more</a>
							</div>
					</div>

				</div>
				<?php
			}

			// Previous/next page navigation.
			$paginate_args = array(
				'prev_text' => '<',
				'next_text' => '>',
				'mid_size' => 1
			);
			?>
			<div class="blog-pagination">
				<?php echo paginate_links($paginate_args); ?>
			</div>
			<?php
			// Restore original post data.
			wp_reset_postdata();
			}
			?>
	</div>

</div>

<?php
$cta_box = get_field('case_studies_cta', 'options');
$cta_text = $cta_box['text_under_the_form'];
?>

<section class="cta cta_case_studies">
	<div class="container">
		<?php echo do_shortcode('[ctct form="358"]'); ?>
		<?php if ($cta_text) { ?>
			<div class="cta__text">
				<?php echo $cta_text; ?>
			</div>
		<?php } ?>
	</div>
</section>

<?php get_footer(); ?>
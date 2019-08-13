<?php
get_header();
?>

<?php
$bg_img_url = get_field('blog_hero_image', 21);
$blog_title = get_field('blog_title', 21);
?>

<div class="blog-hero" style="background-image: url('<?php echo $bg_img_url; ?>')"></div>

<div class="container blog-container">
	<h1><?php echo $blog_title; ?></h1>

	<div class="categories">
		<span class="categories-title">Categories</span>
		<div class="blog-filters-container">

			<a href="<?php echo home_url('/'); ?>blog" class="blog-filter all">All</a>

			<?php
				if( $terms = get_terms( array( 'taxonomy' => 'category', 'orderby' => 'name' ) ) ) : 
		 
					foreach ( $terms as $term ) :
						echo '<a data-id="'. $term->term_id .'" href="' . home_url('/') . 'blog/?cat=' . $term->term_id . '" class="blog-filter">' . $term->name . '</a>';
					endforeach;

				endif;
			?>
		</div>
	</div>

	<div class="row blog-list">
		<?php
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
				the_post();
				$link = get_permalink($post);
				$title = get_the_title($post);
				$date = get_the_date();
				$thumbnail_link = get_the_post_thumbnail_url($post);
				$excerpt = get_the_excerpt();
				?>
				
				<div class="col-12 col-lg-4 blog-list__post">
					
					<div class="post-container">	
						<a href="<?php echo $link; ?>">
							<div class="post__img" style="background-image: url('<?php echo $thumbnail_link ?>')"></div>
						</a>
							<div class="post__desc">
								<span class="post__date"><?php echo $date; ?></span>
								<h2 class="post__title"><?php echo $title; ?></h2>
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
			
		}
		?>
	</div>

</div>


<?php 
$newsletter_header = get_field('newsletter_header', 21);
$newsletter_slogan = get_field('newsletter_slogan', 21);
?>

<section class="newsletter">
	<div class="container">
		<p class="newsletter__header">
			<?php echo $newsletter_header; ?>
		</p>
		<h2 class="newsletter__caller">
			<?php echo $newsletter_slogan; ?>
		</h2>

		<form action="">
			<input type="text">
			<label for="">Enter you e-mail address</label>
			<button class="newsletter__button">Subscribe</button>
		</form>
	</div>
</section>

<?php get_footer(); ?>
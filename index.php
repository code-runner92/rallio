<?php
get_header();
?>

<?php
$bg_img_url = get_field('blog_hero_image', 21);
$blog_title = get_field('blog_title', 21);
?>

<?php 
$url = $_SERVER['REQUEST_URI'];

if (strpos($url, 'category') !== false) {
	$url_processed = str_replace('/category/', '', $url );
	preg_match('/^[^\/]+/', $url_processed, $matches);

	$current_cat = $matches[0];
}

if (strpos($url, 'author') !== false) {
	$url_processed = str_replace('/author/', '', $url );
	preg_match('/^[^\/]+/', $url_processed, $matches);

	$current_author = $matches[0];
	$user = get_user_by('login', $current_author);
}
?>

<div class="blog-hero" style="background-image: url('<?php echo $bg_img_url; ?>')"></div>

<div class="blog-container">

	<div class="container">
		<h1><?php echo $blog_title; ?></h1>

		<div class="categories">
			<span class="categories-title">Categories</span>
			<div class="blog-filters-container">

				<a href="<?php echo home_url('/'); ?>blog" class="blog-filter all">All</a>

				<?php
					if( $terms = get_terms( array( 'taxonomy' => 'category', 'orderby' => 'name' ) ) ) : 
			 
						foreach ( $terms as $term ) :
							//exclude case-studies
							if ( $term->term_id !== 10) {
								echo '<a data-id="'. $term->term_id .'" href="' . get_category_link($term->term_id) . '" class="blog-filter' . ( $current_cat == $term->slug ? ' active' : '') . '">' . $term->name . '</a>';
							}
						endforeach;

					endif;
				?>
			</div>
		</div>

		<div class="author-box">
			<p class="author-name"><?php echo $user->display_name; ?></p>
			<p class="author-bio"><?php echo $user->user_description; ?></p>
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
						
						<div class="single-post-container">	
							<a href="<?php echo $link; ?>">
								<?php if ($thumbnail_link) { ?>
									<div class="post__img" style="background-image: url('<?php echo $thumbnail_link ?>')"></div>
								<?php } else { ?>
									<div class="post__img" style="background-image: url('<?php echo  $GLOBALS['src'] ?>/dist/img/placeholder.jpg')"></div>
								<?php } ?>
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
				
			}
			?>
		</div>
	</div>
	
	<div class="circles"></div>

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
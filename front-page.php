<?php get_header(); ?>


<section class="hero">
	<div class="container hero__container">
		<img class="hero__img" src="<?php echo  $GLOBALS['src'] ?>/dist/img/HERO-ILLU1.svg" alt="">
		<img class="hero__logo" src="<?php echo  $GLOBALS['src'] ?>/dist/img/branding/rallio-logo_sygnet.svg" alt="">
		<img class="hero__img" src="<?php echo  $GLOBALS['src'] ?>/dist/img/HERO-ILLU2.svg" alt="">
		<div class="hero__scroll">
			<!-- get template part.  https://blog.teamtreehouse.com/perfect-wordpress-inline-svg-workflow -->
			<img src="<?php echo  $GLOBALS['src'] ?>/dist/img/icons/SCROLL.svg" alt="">
		</div>
	</div>
</section>

<?php 
$reviews_header = get_field('reviews_header');
$reviews = get_field('reviews');
?>

<?php if ($reviews) { ?>
<section class="reviews">
	<div class="container">
		<div class="reviews__container">
			<h2 class="reviews__header">
				<?php echo $reviews_header; ?>
			</h2>

			<div class="swiper-container">
				<div class="swiper-wrapper">

					<?php foreach( $reviews as $review ) {

						$content = $review['review_content'];
						$author = $review['review_author'];
						$company = $review['review_company'];
					?>

				 		<div class="swiper-slide review">
				 			<div class="review__content">
				 				<?php echo $content; ?>
				 			</div>
				 			<div class="review__author">
				 				<?php echo $author; ?>
				 			</div>
				 			<div class="review__company">
				 				<?php echo $company; ?>
				 			</div>
				 		</div>

				 	<?php } ?>

				</div>
				
				<div class="swiper-pagination"></div>
			</div>			

		</div>
	</div>
</section>
<?php } ?>

<?php 
$cta_header = get_field('cta_header');
$cta_slogan = get_field('cta_slogan');
$cta_text = get_field('cta_text');
?>

<section class="cta">
	<div class="container">
		<p class="cta__header">
			<?php echo $cta_header; ?>
		</p>
		<h2 class="cta__caller">
			<?php echo $cta_slogan; ?>
		</h2>
		<div class="cta__text">
			<?php echo $cta_text; ?>
		</div>
		<button class="cta__button">
			SIGN UP
		</button>
	</div>
</section>

<?php get_footer(); ?>
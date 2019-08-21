<?php /* Page Template Name: Tech */ ?>
<?php get_header(); ?>

<?php
$bg_img_url = get_field('about_us_image');
?>

<div class="tech-hero">
	<img class="hero-img" src="<?php echo  $GLOBALS['src'] ?>/dist/img/tech/TECH1.svg" alt="">
</div>

<div class="tech-container">
		
	<div class="container">

		<?php 
		$header = get_field('tech_header');
		$text = get_field('tech_text');
		?>

		<h1 class="tech-header"><?php echo $header; ?></h1>
		<div class="tech-text"><?php echo $text; ?></div>



	</div>
	
	<?php 
		$employee_advocacy_header = get_field('employee_advocacy_header');
		$employee_advocacy_text = get_field('employee_advocacy_text');
	?>
	<section class="employee-advocacy">
		<div class="container">
			<h2 class="local-header"><?php echo $employee_advocacy_header; ?></h2>
			<div class="local-text"><?php echo $employee_advocacy_text; ?></div>
			<img class="employee-advocacy-img" src="<?php echo  $GLOBALS['src'] ?>/dist/img/local/AGENCY9.svg" alt="">
			<img class="employee-advocacy-img" src="<?php echo  $GLOBALS['src'] ?>/dist/img/local/AGENCYT9.svg" alt="">
		</div>
	</section>

	<?php 
	$reviews_header = get_field('reviews_header', 'options');
	$reviews = get_field('reviews', 'options');
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


	<div class="circles"></div>

</div>

<?php
$cta_box = get_field('local_tech_cta', 'options');
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


<?php get_footer(); ?>
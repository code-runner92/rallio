<?php /* Page Template Name: Local */ ?>
<?php get_header(); ?>

<?php
$bg_img_url = get_field('about_us_image');
?>

<div class="local-hero">
	<img class="hero-img" src="<?php echo  $GLOBALS['src'] ?>/dist/img/bgs/local_bg.svg" alt="">
</div>

<div class="local-container">
		
	<div class="container">

		<?php 
		$header = get_field('local_header');
		$text = get_field('local_text');
		$header_2 = get_field('local_header_2');
		$text_2 = get_field('local_text_2');
		?>

		<h1 class="local-header"><?php echo $header; ?></h1>
		<div class="local-text"><?php echo $text; ?></div>
		<h2 class="local-header not-first"><?php echo $header_2; ?></h2>
		<div class="local-text"><?php echo $text_2; ?></div>

		<div class="local-flow">
		
			<?php 
			$box_1 = get_field('local_box_1');
			$box_2 = get_field('local_box_2');
			$box_3 = get_field('local_box_3');
			?>
			<div class="local-boxes" style="background-image: url('<?php echo $GLOBALS['src'] ?>/dist/img/local/AGENCY4.svg; ?>')">
				<div class="row" >
					<div class="local-box-container col-12 col-xl-4">
						<div class="local-box-img">
							<img class="phone" src="<?php echo  $GLOBALS['src'] ?>/dist/img/local/AGENCY2.svg" alt="">
							<img class="arrow" src="<?php echo  $GLOBALS['src'] ?>/dist/img/ARROW.svg" alt="">
							<img class="phone" src="<?php echo  $GLOBALS['src'] ?>/dist/img/local/AGENCY3.svg" alt="">
							<img class="arrow" src="<?php echo  $GLOBALS['src'] ?>/dist/img/ARROW.svg" alt="">
						</div>
						<div class="local-box-text">
							<div class="local-box-number">1</div>
							<?php echo $box_1; ?>		
						</div>
					</div>
					<div class="arrow-mobile">
						<img class="arrow" src="<?php echo  $GLOBALS['src'] ?>/dist/img/ARROW.svg" alt="">
					</div>
					<div class="local-box-container col-12 col-xl-4">
						<div class="local-box-img phone-main" style="background-image: url('<?php echo $GLOBALS['src'] ?>/dist/img/local/AGENCY4.svg; ?>')">
						</div>
						<div class="local-box-text">
							<div class="local-box-number">2</div>
							<?php echo $box_2; ?>		
						</div>
					</div>
					<div class="arrow-mobile">
						<img class="arrow" src="<?php echo  $GLOBALS['src'] ?>/dist/img/ARROW.svg" alt="">
					</div>
					<div class="local-box-container col-12 col-xl-4">
						<div class="local-box-img">
							<img class="arrow" src="<?php echo  $GLOBALS['src'] ?>/dist/img/ARROW.svg" alt="">
							<img class="phone" src="<?php echo  $GLOBALS['src'] ?>/dist/img/local/AGENCY5.svg" alt="">
							<img class="arrow" src="<?php echo  $GLOBALS['src'] ?>/dist/img/ARROW.svg" alt="">
							<img class="phone" src="<?php echo  $GLOBALS['src'] ?>/dist/img/local/AGENCY6.svg" alt="">
						</div>
						<div class="local-box-text">
							<div class="local-box-number">3</div>
							<?php echo $box_3; ?>		
						</div>
					</div>
					<div class="arrow-mobile">
						<img class="arrow" src="<?php echo  $GLOBALS['src'] ?>/dist/img/ARROW.svg" alt="">
					</div>
				</div>
			</div>
			
			<?php 
			$flow_result = get_field('flow_result');
			$flow_result_header = $flow_result['header'];
			$flow_result_text = $flow_result['text'];
			?>
			<div class="flow-result">
				<img class="flow-result-img" src="<?php echo  $GLOBALS['src'] ?>/dist/img/local/AGENCY7.svg" alt="">
				<div class="flow-result-box">
					<p class="flow-result-header"><?php echo $flow_result_header; ?></p>
					<p class="flow-result-text"><?php echo $flow_result_text; ?></p>
				</div>
			</div>
			
		</div>

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
	$carousel_items = get_field('carousel');
	?>

	<?php if ($carousel_items) { ?>
	<section class="carousel">
			<div class="carousel__container">

				<div class="swiper-carousel-container">

					<div class="swiper-carousel-pagination"></div>

					<div class="swiper-wrapper">

						<?php foreach( $carousel_items as $item ) {

							$title = $item['title'];
							$content = $item['content'];
							$image = $item['image'];
						?>

					 		<div class="swiper-slide r-carousel-item" data-title="<?php echo $title; ?>">
					 			<div class="r-carousel-item-img-wrapper">
					 				<img class="r-carousel-item-img" src="<?php echo $image ?>" alt="">
					 			</div>
					 			<div class="r-carousel-item-text">
						 			<div class="r-carousel-item-title"><?php echo $title; ?></div>
						 			<div class="r-carousel-item-content"><?php echo $content; ?></div>
					 			</div>
					 		</div>

					 	<?php } ?>

					</div>
					
				</div>			

			</div>
	</section>
	<?php } ?>

	
	<?php 
	$reviews_header = get_field('reviews_header');
	$reviews = get_field('reviews');
	?>

	<?php if ($reviews) { ?>
	<section class="reviews">
		<div class="container">
			<div class="reviews__container">
				<h2 class="reviews__header font-50">
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
$cta_text = $cta_box['text_under_the_form'];
?>

<section class="cta cta_case_studies">
	<div class="container">
		<?php echo do_shortcode('[ctct form="357"]'); ?>
		<?php if ($cta_text) { ?>
			<div class="cta__text">
				<?php echo $cta_text; ?>
			</div>
		<?php } ?>
	</div>
</section>


<?php get_footer(); ?>
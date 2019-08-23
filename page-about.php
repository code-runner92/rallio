<?php /* Page Template Name: About us */ ?>
<?php get_header(); ?>

<?php
$bg_img_url = get_field('about_us_image');
?>

<div class="about-hero" style="background-image: url('<?php echo $bg_img_url; ?>')"></div>

<div class="about-container">
		
	<div class="container">

		<?php 
		$heading = get_field('about_us_title');
		$slogan = get_field('about_us_slogan');
		?>

		<h1 class="main-header font-50"><?php echo $heading; ?></h1>

		<div class="slogan font-30"><?php echo $slogan; ?></div>

	</div>


	<?php 
	$carousel_items = get_field('carousel');
	?>

	<?php if ($carousel_items) { ?>
	<section class="carousel carousel-about">
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

	
	<div class="container">

		<?php 
		$culture_title = get_field('culture_title');
		$culture_slogan = get_field('culture_slogan');
		$culture_image = get_field('culture_image');
		$culture_values = get_field('culture_values');
		?>
		<div class="about-culture">
			<h2 class="culture-header font-50"><?php echo $culture_title; ?></h2>
			<div class="culture-slogan font-30"><?php echo $culture_slogan; ?></div>
			<div class="culture-box">
				<div class="culture-image" style="background-image: url('<?php echo $culture_image; ?>')"></div>
				<div class="culture-values">
					<div class="row">
						<?php foreach( $culture_values as $value ) {
							$title = $value['title'];
							$text = $value['text'];
						?>
							<div class="col-12 col-md-6 culture-value">
								<p class="value-title"><?php echo $title; ?></p>
								<div class="value-text"><?php echo $text; ?></div>
							</div>
						<?php 
							} 
						?>
					</div>
				</div>
			</div>
		</div>
		
		<?php 
		$about_review = get_field('about_review');
		$about_review_author = get_field('about_author');
		?>
		<div class="about-review-container">
			<div class="about-review font-30"><?php echo $about_review; ?></div>
			<p class="about-author"><?php echo $about_review_author; ?></p>
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

<?php get_footer(); ?>
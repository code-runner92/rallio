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

		<h1 class="tech-header font-50"><?php echo $header; ?></h1>
		<div class="tech-text"><?php echo $text; ?></div>


		<?php 
		$tech_clients_header = get_field('tech_clients_header');
		?>
		<div class="tech-clients-box">
			<h2 class="tech-clients-header"><?php echo $tech_clients_header; ?></h2>
			<div class="row">
				<div class="col-12 col-md-6 col-xl-3 tech-clients-img">
					<img src="<?php echo  $GLOBALS['src'] ?>/dist/img/tech/Manufactures.svg" alt="">
					<p class="tech-clients-title">Manufactures</p>
				</div>
				<div class="col-12 col-md-6 col-xl-3 tech-clients-img">
					<img src="<?php echo  $GLOBALS['src'] ?>/dist/img/tech/Agencies.svg" alt="">
					<p class="tech-clients-title">Agencies</p>
				</div>
				<div class="col-12 col-md-6 col-xl-3 tech-clients-img">
					<img src="<?php echo  $GLOBALS['src'] ?>/dist/img/tech/Franchisor.svg" alt="">
					<p class="tech-clients-title">Franchisor</p>
				</div>
				<div class="col-12 col-md-6 col-xl-3 tech-clients-img">
					<img src="<?php echo  $GLOBALS['src'] ?>/dist/img/tech/Directors.svg" alt="">
					<p class="tech-clients-title">Regional Directors <br>Field Operations</p>
				</div>
				<div class="col-12 col-md-6 col-xl-3 tech-clients-img">
					<img src="<?php echo  $GLOBALS['src'] ?>/dist/img/tech/Area.svg" alt="">
					<p class="tech-clients-title">Multi Unit/Master <br> Area Developer</p>
				</div>
				<div class="col-12 col-md-6 col-xl-3 tech-clients-img">
					<img src="<?php echo  $GLOBALS['src'] ?>/dist/img/tech/Franchisees.svg" alt="">
					<p class="tech-clients-title">Franchisees</p>
				</div>
				<div class="col-12 col-md-6 col-xl-3 tech-clients-img">
					<img src="<?php echo  $GLOBALS['src'] ?>/dist/img/tech/Employees.svg" alt="">
					<p class="tech-clients-title">Employees</p>
				</div>
				<div class="col-12 col-md-6 col-xl-3 tech-clients-img">
					<img src="<?php echo  $GLOBALS['src'] ?>/dist/img/tech/Customers.svg" alt="">
					<p class="tech-clients-title">Customers</p>
				</div>
			</div>

		</div>


	</div>


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
		$franchisees_experience_header = get_field('franchisees_experience_header');
		$franchisees_experience_text = get_field('franchisees_experience_text');
	?>
	<section class="franchisees-experience">
		<div class="container franchisees-experience-container">
			<div class="franchisees-experience-imgs">
				<img class="franchisees-experience-img" src="<?php echo  $GLOBALS['src'] ?>/dist/img/tech/TECH9.svg" alt="">
				<img class="franchisees-experience-img" src="<?php echo  $GLOBALS['src'] ?>/dist/img/tech/TECH10.svg" alt="">
			</div>
			<div class="franchisees-experience-text-container">
				<h2 class="franchisees-experience-header font-50"><?php echo $franchisees_experience_header; ?></h2>
				<div class="franchisees-experience-text"><?php echo $franchisees_experience_text; ?></div>
			</div>
		</div>
	</section>
	
	
	<?php 
		$customizations_header = get_field('customizations_header');
		$customizations_text = get_field('customizations_text');
	?>
	<div class="customizations">
		<div class="container">
			<h2 class="customizations-header font-50"><?php echo $customizations_header; ?></h2>
			<div class="customizations-text"><?php echo $customizations_text; ?></div>
		</div>
	</div>
	

	<?php 
	$reviews_header = get_field('reviews_header', 'options');
	$reviews = get_field('reviews', 'options');
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


	<?php 
		$suppliers_header = get_field('suppliers_header');
		$suppliers_text = get_field('suppliers_text');
	?>
	<div class="suppliers">
		<div class="container">
			<h2 class="suppliers-header font-50"><?php echo $suppliers_header; ?></h2>
			<div class="suppliers-text"><?php echo $suppliers_text; ?></div>
			<img class="suppliers-img" src="<?php echo  $GLOBALS['src'] ?>/dist/img/tech/TECH11.svg" alt="">
		</div>
	</div>


	<?php 
		$revv_header = get_field('revv_header');
		$revv_subheader = get_field('revv_subheader');
		$revv_reviews = get_field('revv_reviews');
	?>
	<div class="revv">
		<div class="container">
			<h2 class="font-50"><?php echo $revv_header; ?></h2>
			<h3 class="revv-subheader font-30"><?php echo $revv_subheader; ?></h3>
			<div class="row revv-reviews">
				<?php foreach( $revv_reviews as $review ) {
					$review_image = $review['image'];
					$review_title = $review['title'];
					$review_text = $review['text'];
				?>
					<div class="col-12 col-lg-4 revv-review">
						<div class="revv-review-container">
							<div class="revv-review-img" style="background-image: url('<?php echo $review_image ?>')"></div>
							<div class="revv-review-text">
								<p class="revv-review-title"><?php echo $review_title ?></p>
								<div class="revv-review-content"><?php echo $review_text ?></div>
							</div>
						</div>
					</div>
				<?php
				} ?>
			</div>
		</div>
	</div>


	<div class="tech-graph">
		<div class="container">
			<img class="tech-graph-img" src="<?php echo  $GLOBALS['src'] ?>/dist/img/tech/TECH12.svg" alt="">
		</div>
	</div>


	<?php 
		$business_listing_service_header = get_field('business_listing_service_header');
		$business_listing_service_text = get_field('business_listing_service_text');
	?>
	<div class="business-listing-service">
		<div class="container business-listing-service-container">
			<div class="business-listing-service-imgs">
				<img class="business-listing-service-img" src="<?php echo  $GLOBALS['src'] ?>/dist/img/tech/TECH13.svg" alt="">
			</div>
			<div class="business-listing-service-text-container">
				<h2 class="business-listing-service-header font-50"><?php echo $business_listing_service_header; ?></h2>
				<div class="business-listing-service-text"><?php echo $business_listing_service_text; ?></div>
				<div class="business-icons">
					<div class="business-icon-container"><div class="business-icon"><img src="<?php echo  $GLOBALS['src'] ?>/dist/img/icons/Google__G__Logo.svg" alt=""></div></div>
					<div class="business-icon-container"><div class="business-icon"><img src="<?php echo  $GLOBALS['src'] ?>/dist/img/icons/GoogleMaps_logo.svg" alt=""></div></div>
					<div class="business-icon-container"><div class="business-icon"><img src="<?php echo  $GLOBALS['src'] ?>/dist/img/icons/Yelp_Logo.svg" alt=""></div></div>
				</div>
			</div>
		</div>
	</div>


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
		<?php echo do_shortcode('[ctct form="357"]'); ?>
		<div class="cta__text">
			<?php echo $cta_text; ?>
		</div>
	</div>
</section>


<?php get_footer(); ?>
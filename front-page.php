<?php get_header(); ?>


<section class="hero">
	<div class="container hero__container">
		<img class="hero__img" src="<?php echo  $GLOBALS['src'] ?>/dist/img/HERO-ILLU1.svg" alt="">
		<img class="hero__logo" src="<?php echo  $GLOBALS['src'] ?>/dist/img/branding/rallio-logo_sygnet.svg" alt="">
		<img class="hero__img" src="<?php echo  $GLOBALS['src'] ?>/dist/img/HERO-ILLU2.svg" alt="">
		<div class="hero__scroll">
			<?php get_template_part('dist/img/icons/inline-SCROLL.svg'); ?>
		</div>
	</div>
</section>


<?php 
$flow_heading = get_field('flow_heading');
$flow_text = get_field('flow_text');
?>

<section class="flow">
	<div class="container">
		<section class="flow__header">
			<h2 class="flow__heading">
				<?php echo $flow_heading; ?>
			</h2>
			<div class="flow__text">
				<?php echo $flow_text; ?>
			</div>
		</section>
		

		<?php 
		$phases = get_field('phases');
		?>

		<?php 
		$phase_1_desc = $phases['phase_1_desc'];
		$phase_1_img_desc = $phases['phase_1_img_desc'];
		?>
		<section class="phase">
			<div class="phase__info">
				<div class="phase__info__container">
					<div class="phase__info__no">
						1
					</div>
					<div class="phase__info__content">
						<p class="phase__name">Phase 1</p>
						<div class="phase__desc"><?php echo $phase_1_desc; ?></div>
					</div>
				</div>

				<div class="phase__arrow">
					<img src="<?php echo  $GLOBALS['src'] ?>/dist/img/ARROW.svg" alt="">
				</div>

			</div>
			
			<div class="phase__img">
				<img src="<?php echo  $GLOBALS['src'] ?>/dist/img/FLOW-ILLU1.svg" alt="">
				<p class="phase__img__desc"><?php echo $phase_1_img_desc; ?></p>
			</div>

			<div class="phase__arrow--mobile">
				<img src="<?php echo  $GLOBALS['src'] ?>/dist/img/ARROW.svg" alt="">
			</div>

		</section>


		<?php 
		$phase_2_desc = $phases['phase_2_desc'];
		$phase_2_img_desc = $phases['phase_2_img_desc'];
		?>
		<section class="phase">
			<div class="phase__info">
				<div class="phase__info__container">
					<div class="phase__info__no">
						2
					</div>
					<div class="phase__info__content">
						<p class="phase__name">Phase 2</p>
						<div class="phase__desc"><?php echo $phase_2_desc; ?></div>
					</div>
				</div>

				<div class="phase__arrow">
					<img src="<?php echo  $GLOBALS['src'] ?>/dist/img/ARROW.svg" alt="">
				</div>

			</div>
			
			<div class="phase__img">
				<img src="<?php echo  $GLOBALS['src'] ?>/dist/img/FLOW-ILLU2.svg" alt="">
				<p class="phase__img__desc"><?php echo $phase_2_img_desc; ?></p>
			</div>

			<div class="phase__arrow--mobile">
				<img src="<?php echo  $GLOBALS['src'] ?>/dist/img/ARROW.svg" alt="">
			</div>

		</section>


		<?php 
		$phase_3_desc = $phases['phase_3_desc'];
		$phase_3_img_desc = $phases['phase_3_img_desc'];
		?>
		<section class="phase">
			<div class="phase__info">
				<div class="phase__info__container">
					<div class="phase__info__no">
						3
					</div>
					<div class="phase__info__content">
						<p class="phase__name">Phase 3</p>
						<div class="phase__desc"><?php echo $phase_3_desc; ?></div>
					</div>
				</div>

				<div class="phase__arrow">
					<img src="<?php echo  $GLOBALS['src'] ?>/dist/img/ARROW.svg" alt="">
				</div>

			</div>
			
			<div class="phase__img">
				<img src="<?php echo  $GLOBALS['src'] ?>/dist/img/FLOW-ILLU3.svg" alt="">
				<p class="phase__img__desc"><?php echo $phase_3_img_desc; ?></p>
			</div>

			<div class="phase__arrow--mobile">
				<img src="<?php echo  $GLOBALS['src'] ?>/dist/img/ARROW.svg" alt="">
			</div>

		</section>

		<?php 
		$final_phase_name = $phases['final_phase_name'];
		$final_phase_desc = $phases['final_phase_desc'];
		?>
		<section class="final-phase">
			<div class="final-phase__img">
				<img src="<?php echo  $GLOBALS['src'] ?>/dist/img/FLOW-BADGE.svg" alt="">
			</div>
			<div class="final-phase__content">
				<p class="final-phase__name"><?php echo $final_phase_name; ?></p>
				<div class="final-phase__desc"><?php echo $final_phase_desc; ?></div>
			</div>
			<span class="background-text">The ultimate<br/>solution</span>
		</section>


		<?php
		$solution = get_field('solution');
		$title_1 = $solution['solution_title_1'];
		$title_2 = $solution['solution_title_2'];
		$title_3 = $solution['solution_title_3'];
		$title_4 = $solution['solution_title_4'];
		?>
		<section class="solution">
			<div class="solution__container">
				<img src="<?php echo  $GLOBALS['src'] ?>/dist/img/FLOW-PHONE1.svg" alt="">
				<p class="solution__title"><?php echo $title_1; ?></p>
			</div>	
			<div class="solution__plus"></div>
			<div class="solution__container">
				<img src="<?php echo  $GLOBALS['src'] ?>/dist/img/FLOW-PHONE2.svg" alt="">
				<p class="solution__title"><?php echo $title_2; ?></p>
			</div>	
			<div class="solution__plus"></div>
			<div class="solution__container">
				<img src="<?php echo  $GLOBALS['src'] ?>/dist/img/FLOW-PHONE3.svg" alt="">
				<p class="solution__title"><?php echo $title_3; ?></p>
			</div>	
			<div class="solution__plus"></div>
			<div class="solution__container">
				<img src="<?php echo  $GLOBALS['src'] ?>/dist/img/FLOW-ILLU4.svg" alt="">
				<p class="solution__title"><?php echo $title_4; ?></p>
			</div>

		</section>

	</div>
	<div class="circles">
		<div class="circle"></div>
		<div class="circle"></div>
		<div class="circle"></div>
		<div class="circle"></div>
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
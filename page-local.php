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
		<h1 class="local-header"><?php echo $header_2; ?></h1>
		<div class="local-text"><?php echo $text_2; ?></div>

	</div>
	
	<div class="circles"></div>

</div>


<?php get_footer(); ?>
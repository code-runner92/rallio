<?php /* Page Template Name: Privacy Policy */ ?>
<?php get_header(); ?>


<div class="page-privacy">

	<?php
	$title = get_the_title();
	$raw_url = get_home_url(null, '', 'rest');
	$url = str_replace( array( 'http://', 'https://' ), 'www.', $raw_url );

	$owner = get_field('privacy_owner');
	$date = get_field('privacy_date');	
	?>

	<section class="container container--privacy information">
		<div class="information-title">
			<h1><?php echo $title; ?></h1>
			<p class="under-title">Privacy Policy of <a href="<?php echo $raw_url; ?>"><?php echo $url; ?></a></p>
		</div>
		<div class="row">
			<div class="col-12 col-md-8">
				<h2><?php echo $owner['title']; ?></h2>
				<div class="">
					<?php echo $owner['text']; ?>
				</div>
			</div>
			<div class="col-12 col-md-4">
				<h2><?php echo $date['title']; ?></h2>
				<div class="">
					<?php echo $date['text']; ?>
				</div>
			</div>
		</div>
	</section>

	<?php
	$data_collected_header = get_field('data_collected_header');
	$data_collected_text = get_field('data_collected_text');	
	?>

	<section class="container container--privacy information">
		<h2><?php echo $data_collected_header; ?></h2>
		<div class="text">
			<?php echo $data_collected_text; ?>
		</div>
	</section>	

	<?php
	$mode_and_place_header = get_field('mode_and_place_header');
	$mode_and_place_text = get_field('mode_and_place_text');	
	?>

	<section class="container container--privacy information">
		<h2><?php echo $mode_and_place_header; ?></h2>
		<div class="text">
			<?php echo $mode_and_place_text; ?>
		</div>
	</section>	

</div>

<?php get_footer(); ?>
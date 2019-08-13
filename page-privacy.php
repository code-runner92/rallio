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

	<section class="container container--privacy">
		<h2><?php echo $data_collected_header; ?></h2>
		<div class="text">
			<?php echo $data_collected_text; ?>
		</div>
	</section>	

	<?php
	$mode_and_place_header = get_field('mode_and_place_header');
	$mode_and_place_text = get_field('mode_and_place_text');	
	?>

	<section class="container container--privacy">
		<h2><?php echo $mode_and_place_header; ?></h2>
		<div class="text">
			<?php echo $mode_and_place_text; ?>
		</div>
	</section>	

	<?php
	$processing_purposes_header = get_field('processing_purposes_header');
	$processing_purposes_text = get_field('processing_purposes_text');	
	?>

	<section class="container container--privacy">
		<h2><?php echo $processing_purposes_header; ?></h2>
		<div class="text">
			<?php echo $processing_purposes_text; ?>
		</div>
	</section>	

	<?php
	$facebook_permissions_header = get_field('facebook_permissions_header');
	$facebook_permissions_text = get_field('facebook_permissions_text');	
	?>

	<section class="container container--privacy">
		<h2><?php echo $facebook_permissions_header; ?></h2>
		<div class="text">
			<?php echo $facebook_permissions_text; ?>
		</div>
	</section>

	<?php
	$detailed_information_processing_header = get_field('detailed_information_processing_header');
	$detailed_information_processing_text = get_field('detailed_information_processing_text');

	$access = get_field('access_to_third_party_accounts');
	$interaction = get_field('interaction_with_external_social_networks');
	?>

	<section class="container container--privacy detailed-information">
		<h2><?php echo $detailed_information_processing_header; ?></h2>
		<div class="text">
			<?php echo $detailed_information_processing_text; ?>
		</div>
		<div class="di-row">
			<div class="di-col">
				<h3><?php echo $access['header']; ?></h3>
				<div class="">
					<?php echo $access['text']; ?>
				</div>
			</div>
			<div class="di-col">
				<h3><?php echo $interaction['header']; ?></h3>
				<div class="">
					<?php echo $interaction['text']; ?>
				</div>
			</div>
		</div>
	</section>	

	<?php
	$right_of_users_header = get_field('right_of_users_header');
	$right_of_users_text = get_field('right_of_users_text');	
	?>

	<section class="container container--privacy">
		<h2><?php echo $right_of_users_header; ?></h2>
		<div class="text">
			<?php echo $right_of_users_text; ?>
		</div>
	</section>

	<?php
	$additional_information_header = get_field('additional_information_header');
	$additional_information_text = get_field('additional_information_text');	
	?>

	<section class="container container--privacy">
		<h2><?php echo $additional_information_header; ?></h2>
		<div class="text">
			<?php echo $additional_information_text; ?>
		</div>
	</section>

	<?php
	$definitions_header = get_field('definitions_header');
	$definitions_text = get_field('definitions_text');	
	?>

	<section class="container container--privacy definitions">
		<div class="definitions-container">
			<h3><?php echo $definitions_header; ?></h3>
			<div class="text">
				<?php echo $definitions_text; ?>
			</div>
		</div>
	</section>

	<?php
	$legal_information_header = get_field('legal_information_header');
	$legal_information_text = get_field('legal_information_text');	
	?>

	<section class="container container--privacy">
			<h2><?php echo $legal_information_header; ?></h2>
			<div class="text">
				<?php echo $legal_information_text; ?>
			</div>
	</section>

</div>

<?php get_footer(); ?>
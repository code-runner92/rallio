<?php /* Page Template Name: Terms of use */ ?>
<?php get_header(); ?>


<div class="page-privacy">

	<?php
	$title = get_the_title();
	$content = get_the_content();
	$raw_url = get_home_url(null, '', 'rest');
	$url = str_replace( array( 'http://', 'https://' ), 'www.', $raw_url );

	$owner = get_field('privacy_owner');
	$date = get_field('privacy_date');	
	?>

	<section class="container container--privacy container--terms">
		<h1 class="font-50"><?php echo $title; ?></h1>
		<div class="content">
			<?php echo $content; ?>
		</div>
	</section>


</div>

<?php get_footer(); ?>
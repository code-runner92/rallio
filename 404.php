<?php get_header(); 
$frontpage_id = get_option( 'page_on_front' );
?>

<section class="p404">
	<div class="container">
		<div class="p404-container">
			<div class="heading">Server error</div>
			<div class="code">404</div>
			<p class="text-header">This is awkward</p>
			<p class="text">Page not found. It either doesn’t exist or has moved somewhere else.</p>
		</div>
	</div>
</section>

<?php get_footer(); ?>
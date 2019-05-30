<?php get_header(); ?>

<!-- Forsidens bootstrap og overskrift-->

<main>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 offset-sm-2">
				<h1>Vovsevenner - her har du alt lige ved poten!</h1>
				<video autoplay controls muted loop id="video">
                    <source src="<?php echo get_stylesheet_directory_uri() ?>/images/Reklamevideo.mp4" type="video/mp4">
                </video>
			
			</div>
		</div>
		<div class="row">
			<?php include('template-parts/frontpage-posts.php'); ?>
		</div>
	</div>
</main>

<?php get_footer(); ?>
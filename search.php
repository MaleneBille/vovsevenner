<?php get_header(); ?>

<main role="main">
	<!-- section siden med søgeresultater-->
	<section>
		<div class="container">

			<h1>
				<?php echo sprintf( __( '%s Søgeresultater ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?>
			</h1>
			<div class="search-result">
				<?php get_template_part('loop'); ?>
				<?php get_template_part('pagination'); ?>

			</div>
		</div>

	</section>
	<!-- /section siden med søgeresultater -->
</main>

<?php get_footer(); ?>
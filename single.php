<?php get_header(); ?>

	<main>
	<div class="container">
        <div class="row">
			<div class="col-12">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


		<!-------------------------------------------------------------------------------------
		 HER KAN JEG SÆTTE DIV OM FEKS THUMBNAIL, GIVE DEN EN KLASSE OG EFTERFØLGENDE STYLE I COMPONENTS.CSS.
		 DENNE THUMBNAIL BERØRER IKKE IMG PÅ PLUGINS OG FRONT-PAGE, DA DET HAR EN SPECIFIK KLASSE TIL POSTS. 
		-------------------------------------------------------------------------------------->

			<!-- post thumbnail -->
			<div class="post-images">
			<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			</div>
			</div>
			<!-- /post thumbnail -->

			<!------------------------------------------------------------------------------- 
			POST TITLE	
		    ---------------------------------------------------------------------------------->

			<!-- post title -->
			<h1>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h1>
			<!-- /post title -->

            <!------------------------------------------------------------------------------- 
			CONTENT AREA	
		    ---------------------------------------------------------------------------------->
			<div class="row">
			<div class="col-8 offset-2 offset-2 content-area">
			<div class="post-content-area">	
			<?php the_content(); // Dynamic Content ?>
			</div>
			</div>
			</div>
			
			<!------------------------------------------------------------------------------- 
			POST DETAILS	
		    ---------------------------------------------------------------------------------->	

			<div class="post-details">
			<span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
			<p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>
			<?php edit_post_link(); // Always handy to have Edit Post Links available ?>
			
			<!-- Author, comments etc. er foreløbig slettet, men vi kan kopiere php ind fra det originale tema, hvis det er vi har brug for det alligevel -->
			</div>

			
		

	<?php endwhile; ?>

	<?php endif; ?>

				</div>
			</div>
		</div>	
	</main>

<?php get_footer(); ?>

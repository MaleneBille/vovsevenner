<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php if (in_category('front-page')) : ?>
		<div class="col-6">
			<div class="box-horizontal">
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
				<?php the_post_thumbnail(); // Declare pixel size you need inside the array ?>
			<?php endif; ?>
			<h2><?php the_title(); ?></h2>
		</a>			
	</div>
	</div>
	<?php endif; ?>

<?php endwhile; ?>

<?php endif; ?>

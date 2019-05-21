<?php get_header(); ?>

<main>
	<div class="container">
        <div class="row">
			<div class="col-12">

				<h1><?php the_title(); ?></h1>
<!-- 
			<div class="container">
				<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="row">
            <div class="col-12">
				<ul class="sub-nav">
					<li><a href="#">Godbidder</a></li>
					<li><a href="#">Legetøj</a></li>
					<li><a href="#">Diverse</a></li>
				</ul>
								</div>
							</div>
						</div>
					</div>
				</div> -->
<div id="main-content">
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

						<?php the_content(); ?>

						<?php edit_post_link(); ?>

					<?php endwhile; ?>

					<?php endif; ?>
</div>
			</div>
		</div>
    </div>
</main>

<?php get_footer(); ?>

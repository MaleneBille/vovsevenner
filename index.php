<?php get_header(); ?>

<main>
	<div class="container">
        <div class="row">
            <div class="col-8">
                <div class="row">
                    <div class="col-12">
                        <div class="box-horizontal">
                            <h1>Catchy headline!</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php include('template-parts/frontpage-posts.php'); ?>
                </div>
            </div>
            <div class="col-4">
                <div class="box-horizontal">
                    <h2>Opslagstavle</h2>
                   <img src="<?php echo get_stylesheet_directory_uri() ?>/images/sticky-notes.png" alt=""> 
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

<!doctype html>
<html <?php language_attributes(); ?>>

<!-- Vores links og meta -->

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
		<?php wp_title(''); ?>
		<?php if(wp_title('', false)) { echo ' :'; } ?>
		<?php bloginfo('name'); ?>
	</title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta charset="<?php bloginfo('charset'); ?>">

	<!-- 3 party -->
	<link href="<?php echo get_stylesheet_directory_uri() ?>/styles/external/normalize.css" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri() ?>/styles/external/bootstrap-grid.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<!-- Solution style -->
	<link href="<?php echo get_stylesheet_directory_uri() ?>/styles/variables.css" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri() ?>/styles/body.css" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri() ?>/styles/navigation.css" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri() ?>/styles/header.css" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri() ?>/styles/footer.css" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri() ?>/styles/elements.css" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri() ?>/styles/components.css" rel="stylesheet">
	<link href="<?php echo get_stylesheet_directory_uri() ?>/styles/plugins.css" rel="stylesheet">

	<script src="<?php echo get_stylesheet_directory_uri() ?>/js/search-toggle.js" type="text/javascript"></script>
	<script src="<?php echo get_stylesheet_directory_uri() ?>/js/menu-toggle.js" type="text/javascript"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<nav class="top-nav">
			<a href="/vovsevenner/wordpress/" class="logo"><img src="<?php echo get_stylesheet_directory_uri() ?>/images/nytlogo.png" alt="Logo"></a>

			<?php html5blank_nav(); ?>
			<button type="button" class="search-toggle" onclick="searchToggle()">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/search-icon.png" class="search-button" alt="Søg">
            </button>
		
			<button class="toogle-menu" onclick="navToggle()">
                <img class="menu-button open" src="<?php echo get_stylesheet_directory_uri() ?>/images/close-cross.svg" alt="Luk menu">
                <img class="menu-button close" src="<?php echo get_stylesheet_directory_uri() ?>/images/burger-menu.svg" alt="Åbn menu">
            </button>
		
		</nav>

		<div id="search-form" class="search-form">
			<?php get_template_part('searchform'); ?>
		</div>
	</header>
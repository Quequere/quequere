<!DOCTYPE html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<head>
	<meta charset="<?php bloginfo('charset'); ?>">

	<!-- DNS Prefetch -->
	<link rel="dns-prefetch" href="//www.google-analytics.com">

	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

	<!-- Meta -->
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

	<!-- CSS + jQuery + JavaScript -->
	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<?php
$slug = (is_page()) ? get_query_var('name') : $post->post_name;
if (in_array($slug, array('contatos', 'jogos'))){
	$logo_branco = "_branco";
}
?>
<div id="temporary-background"></div>
<div id="temporary-background-2"></div>
<div id="background"></div>
	<!-- Header -->
	<header>

		<!-- Wrapper -->
		<div class="wrapper">

			<!-- Logo -->
			<div id="logo">
				<a href="<?php echo home_url(); ?>">
					<!-- SVG Logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
					<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo"> -->
					<img src="<?php echo get_template_directory_uri() . "/img/dev_logo$logo_branco.png"; ?>" alt="Logo">
				</a>
			</div>
			<!-- /Logo -->

			<!-- Nav -->
			<nav>
				<?php html5blank_nav(); ?>
			</nav>
			<!-- /Nav -->

			<br class="clear">

		</div>
		<!-- /Wrapper -->

	</header>
	<!-- /Header -->

	<!-- Wrapper -->
	<div class="wrapper">

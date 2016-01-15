<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta http-equiv="cleartype" content="on">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<title><?php print_title(); ?></title>

		<!-- SEO -->
		<meta name="keywords" content="">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<!-- Favicon - generated with http://www.favicomatic.com/ -->
		<link type="image/x-icon" href="http://www.sallymexico.com/Content/Styles/Images/logobrowser.ico" rel="shortcut icon"/>

		<!-- Google font(s) -->
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic,400italic' rel='stylesheet' type='text/css'>

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->

		<!-- Typekit -->
		<script src="https://use.typekit.net/lus4pyy.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>
		<?php wp_head(); ?>
	</head>

	<body <?php if ( ! is_home() && ! is_page( 'ver-tutoriales' ) ) echo 'class="bg-primary"'; body_class();  ?>>

		<?php if ( is_home() ): ?>
			<div class="[ bg-home bg-image ]">
				<div class="[ bg-opacity-light bg-image height-100 ] ">
					<?php get_template_part( 'templates/header', 'primary' ); ?>
				</div>
		<?php elseif ( is_page( 'ver-tutoriales' ) ): ?>
			<?php get_template_part( 'templates/header', 'primary' ); ?>
		<?php else: ?>
			<?php get_template_part( 'templates/header', 'light' ); ?>
		<?php endif; ?>
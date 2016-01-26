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

		<?php if ( is_single() ) :
			global $post;
			$image_url = str_replace( 'http', 'https', THEMEPATH . get_post_meta( $post->ID, '_url_imagen_meta', true ) );
			$video_url = str_replace( 'http', 'https', THEMEPATH . get_post_meta( $post->ID, '_url_video_meta', true ) );

		?>
			<meta property="og:url" content="<?php echo get_permalink() ?>" />

			<meta property="og:title" content="<?php echo get_the_title(); ?>" />
			<meta property="og:description" content="Sally - Comparte tu belleza. ¿Te gustaría contagiar al mundo con tu belleza? Graba tu tutorial y comparte los mejores tips." />

			<meta property="og:type" content="video.movie" />
			<meta property="og:video:width" content="640" />
			<meta property="og:video:height" content="385" />

			<meta property="og:image" content="<?php echo $image_url; ?>">
			<meta property="og:image:width" content="320" />
			<meta property="og:image:height" content="180" />

			<meta property="og:video" content="<?php echo str_replace( 'http', 'https', THEMEPATH ); ?>player.swf?bufferlength=3&lightcolor=333333&autostart=true&file=<?php echo rawurlencode( $video_url ); ?>&provider=http&frontcolor=CCCCCC&image=<?php echo rawurlencode( $image_url ); ?>&backcolor=FFFFFF" />

			<meta property="fb:app_id" content="1107163669301864" />
		<?php endif; ?>
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
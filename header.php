<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package pixely4
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>

	<link href="<?php echo get_template_directory_uri()?>/css/pixely.css" rel="stylesheet">

	<script type="text/javascript" src="//use.typekit.net/ztz1kdu.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W3FKB7');</script>
    <!-- End Google Tag Manager -->

</head>

<body <?php body_class(); ?>>
	<header>
		<div class="container">

			<h1><a href="<?php bloginfo('url'); ?>">pixely</a></h1>

			<nav class="nav-collapse">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => '' ) ); ?>
			</nav>
		</div>
    </header>

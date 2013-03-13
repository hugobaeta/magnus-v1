<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Magnus
 * @since Magnus 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'magnus' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header id="masthead" class="site-header" role="banner">
	<hgroup>
		<h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
		<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
	</hgroup>

	<nav role="navigation" class="site-navigation main-navigation">
		<h1 class="assistive-text"><?php _e( 'Menu', 'magnus' ); ?></h1>
		<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'magnus' ); ?>"><?php _e( 'Skip to content', 'magnus' ); ?></a></div>

		<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
	</nav><!-- .site-navigation .main-navigation -->
</header><!-- #masthead .site-header -->

<section id="featured">
	<?php 
	// Check to see if the header image has been removed
	$header_image = get_header_image();
	if ( ! empty( $header_image ) ) : ?>
	<div class="image-wrap">
	<?php 
		// The header image
		// Check if this is a post or page, if it has a thumbnail, and if it's a big one
		if ( is_singular() &&
				has_post_thumbnail( $post->ID ) ) :
			// Houston, we have a new header image!
			echo get_the_post_thumbnail( $post->ID, 'post-thumbnail' );
		//elseif ( is_single() && has_post_format( 'image' ) ) :
		//	echo 'This is an image post format - Lets pull in the image from the post now, ok?';
		else : ?>
			<img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="" />
		<?php endif; // end check for featured image or standard header ?>
	</div><!-- .image-wrap -->
	<?php endif; // end check for removed header image ?>
</section><!-- #feature -->

<div id="page" class="hfeed site">
	<div id="main">
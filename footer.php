<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Magnus
 * @since Magnus 1.0
 */
?>

	</div><!-- #main -->
</div><!-- #page .hfeed .site -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<?php /*
	<nav role="navigation" class="site-navigation footer-navigation">
		<h1 class="assistive-text"><?php _e( 'Menu', 'magnus' ); ?></h1>
		<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
	</nav>
	*/ ?>
	<div class="site-info">
		<?php do_action( 'magnus_credits' ); ?>
		<a class="site-generator" href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'magnus' ); ?>"><?php printf( __( 'Proudly powered by %s', 'magnus' ), 'WordPress' ); ?></a>
		<a class="theme-designer" href="http://hugobaeta.com/"><?php printf( __( 'Theme: %1$s by %2$s', 'magnus' ), 'Magnus', 'Hugo Baeta' ); ?></a>
	</div><!-- .site-info -->
</footer><!-- .site-footer .site-footer -->

<?php wp_footer(); ?>

</body>
</html>
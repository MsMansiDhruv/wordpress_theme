<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Steps
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">

				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				 /* printf( esc_html__( 'Proudly powered by %s', 'steps' ), 'WordPress' ); */
				 printf( esc_html__( 'Disclaimer: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sed dignissim augue, a varius elit. Nam lobortis orci ipsum, sit amet accumsan ligula faucibus non. Ut mi diam, faucibus vitae pellentesque quis, sollicitudin id quam. Nulla sed nunc odio. Cras scelerisque tortor id posuere volutpat. ' ), 'WordPress' );
				?>
			<!-- </a>  -->
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

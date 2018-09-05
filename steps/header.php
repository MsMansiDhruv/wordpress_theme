<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Steps
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Secondary Menu added -->
<nav id="site-navigation" class="submenufunction">
	<button class="menu-toggle" aria-controls="secondary-menu" aria-expanded="false"><?php esc_html_e( 'Secondary Menu', 'steps' ); ?></button>
	<?php
	wp_nav_menu( array(
		'theme_location' => 'menu-2',
		'menu_id'        => 'secondary-menu',
	) );
	?>
</nav><!-- #site-navigation -->

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'steps' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">			
			<?php
			
			//the_custom_logo();
			//Set logo by default
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
			if ( has_custom_logo() ) {
					echo '<img src="'. esc_url( $logo[0] ) .'">';
			} else {
					echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
			}

			
			if ( is_front_page() && is_home() ) :
				?>
					<!-- Primary Menu Start -->
					<nav id="site-navigation" class="main-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'steps' ); ?></button>
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
					</nav><!-- #site-navigation -->
					<!-- Primary Menu Ends -->
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$steps_description = get_bloginfo( 'description', 'display' );
			if ( $steps_description || is_customize_preview() ) :
				?>
			<?php endif; ?>
		</div><!-- .site-branding -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">

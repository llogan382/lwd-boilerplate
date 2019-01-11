<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lwd-boilerplate
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



		

	<div class="container">
		<div class="row">
			<div class="col-2">
				<?php
				the_custom_logo();
				if ( is_front_page() && is_home() ) :
					?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
				else :
					?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php
				endif;
				$lwd_boilerplate_description = get_bloginfo( 'description', 'display' );
				if ( $lwd_boilerplate_description || is_customize_preview() ) :
					?>
					<p class="site-description"><?php echo $lwd_boilerplate_description; /* WPCS: xss ok. */ ?></p>
				<?php endif; ?>
			</div>






			<div id="primary" class="col-2 menu main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'loganwebdev' ); ?></button>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary',
				) );
				?>


			</div><!-- #site-navigation -->
			
		</div>

	</div>






	<div class="content-area">
			<main id="main" class="site-main">
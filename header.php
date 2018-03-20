<?php
	/**
	 * The header for our theme.
	 *
	 * This is the template that displays all of the <head> section as well as header & nav.
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
	 *
	 * @package unplugged
	 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="wrapper">
		<header class="banner">
			<nav class="navbar" role="navigation" aria-label="main navigation">
				<div class="navbar-brand">
					<a class="navbar-item" href="<?php bloginfo( 'url' ); ?>">
						<?php bloginfo( 'title' ); ?>
					</a>
				</div>
				<?php 
					//TODO: Feature: Add dynamic nav menu.
				?>
			</nav>
		</header>
	</div>

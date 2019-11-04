<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blanco_thema
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
<header>
<nav class="navbar navbar-expand-sm navbar-light bg-light">
	<a class="navbar-brand" href="#">Company Logo</a>
	<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
		aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="collapsibleNavId">
		<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
			<li class="nav-item active">
				<a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/content">content</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/content-2">content2</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/agenda">Agenda</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/contact">Contact</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
				<div class="dropdown-menu" aria-labelledby="dropdownId">
					<a class="dropdown-item" href="/contact">Contact</a>
					<a class="dropdown-item" href=".agenda">Agenda</a>
				</div>
			</li>
		</ul>
		<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
	<div class="mx-auto"></div>
		<div class="site-branding">
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
			$blanco_thema_description = get_bloginfo( 'description', 'display' );
			if ( $blanco_thema_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $blanco_thema_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
		</div>
		<div>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="text" placeholder="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
	</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

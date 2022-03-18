<?php ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
	<?php bloginfo('name'); ?> | 
	<?php is_front_page() ? bloginfo('description') : wp_title(''); ?>
</title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php ?>

<?php ?>

<?php wp_head(); ?>

</head>

<body 
	<?php body_class(); ?>
>

<header>
	<nav>
				<!-- Hamburger Menu -->
		<div class="hamburger-menu">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</div>
		<section class="hamburger-container">
			<button class="hamburger">
					<i class="menu-icon fas fa-bars fa-2x"></i>
					<i class="close-icon fas fa-times fa-2x"></i>
			</button>
		</section>
		<section>
			<div class="logo-container">
				<a href="<?php echo get_bloginfo('url') ?>"><img id="logo" src="<?php echo get_bloginfo('template_url') ?>/assets/full-logo-black.png" alt="logo"/></a>
			</div>
			<div class="nav-links">
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) );?>
			</div>
		</section>

	</nav>
	<div id="back-to-top-container">
    <button id="back-to-top"><i class="fas fa-arrow-up"></i></button>
  </div>
</header>

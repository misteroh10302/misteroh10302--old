<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package josh_ruben
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/f41a6ad7c3.js"></script>
<link href="https://fonts.googleapis.com/css?family=Cutive+Mono|Source+Code+Pro:200,300,400,500" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'josh_ruben'); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
            if (is_front_page() && is_home()) : ?>
				<h1 class="site-title"><a class="bio" href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
			<?php
            endif;
            $description = get_bloginfo('description', 'display');
            if ($description || is_customize_preview()) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
            endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'josh_ruben'); ?></button>
			 <?php wp_nav_menu(array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' )); ?>
       <a class="social-link" target="_blank" href='http://www.twitter.com/joshruben'><i class="fa fa-twitter" aria-hidden="true"></i></a>
       <a class="social-link" target="_blank" href='http://www.instagram.com/joshrubensnaps'><i class="fa fa-instagram" aria-hidden="true"></i></a>
       <a class="social-link" target="_blank" href='http://www.imdb.com/name/nm2063694/'><i class="fa fa-imdb" aria-hidden="true"></i></a>
		</nav><!-- #site-navigation -->
    <div class="header-mobile">
      <div class="mobile-logo">
        <h1>JB</h1>
      </div>
      <button  class="mobile-button" type="button" name="button">
        Menu
      </button>
    </div>

    <nav id="mobile-nav">
      <div class="close-mobile">
          close
      </div>
      <?php wp_nav_menu(array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' )); ?>
    </nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content">

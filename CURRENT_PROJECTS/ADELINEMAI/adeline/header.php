<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Adeline
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
 <script
  src="http://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>

<?php wp_head(); ?>
</head>
<style>

@font-face {
    font-family: Karla;
    src: url(/wp-content/uploads/Karla-Regular.ttf);
}

body {
  color:black;
  font-family: Karla, Arial, Sans-serif;

}



.homepage-posts:nth-child(2) {

    margin: 0px !important;
}

.innerCap h2 {
	    padding: 0px 30px;
}
#content {
	    max-width: 1400px;
	    margin: 0 auto !important;
	 
}
	#click-nav {
	    float: left;
	    position: fixed;
	    top: 30px;
	    left: 30px;
	    font-family: Karla;
	    z-index: 999;
	    cursor: pointer;
	    font-size: 12px;
	    letter-spacing: 2px;
	}

	#click-nav:after {
    display: block;
    content: '';
    border-bottom: solid 2px red;
    transform: scaleX(0);
    transition: transform 250ms ease-in-out;
}

#click-nav:hover:after { transform: scaleX(1); }
#page #masthead a {
    text-decoration: none;
    color: black;
    font-size: 1em;
    letter-spacing: 4px;
     font-family: Karla, Arial, Sans-serif;
}
#page #masthead a:focus {
	border: 0px;
}
.single #page #masthead .site-title a {
    text-decoration: none;
    color: black;
    font-size: 20px;
    letter-spacing: 4px;
     font-family: Karla, Arial, Sans-serif;
     position: absolute;
     left: 0;
     right:0;
     top:15px;
}

.single #page #masthead #click-nav {
	top:15px;
}
#page #masthead a:hover {
	color:red;
}

#page .site-title {
	    margin-top: 0px !important;
}
.menu ul{
	    margin: 0px;
    list-style: none;
    padding: 0px;
}
.large-menu a:hover {
       color: rgba(255, 255, 255, 0.56) !important;
    transition: 0.2s ease-in-out;
}
.social {margin-top: 30px;}

@media screen and (max-width: 1240px) {
	#click-nav {
	    float: left;
	    position: fixed;
	    top: 30px;
	    left: 15px !important;
	    font-family: Karla;
	    z-index: 999;
	    cursor: pointer;
	    font-size: 12px;
	    letter-spacing: 2px;
	}
}

@media screen and (max-width: 1240px) {

	.mobile-thumb {
		    padding: 15px;
		    max-width: 600px;
		    margin: 0 auto !important;
		    min-width: 600px;
		    width:100%;
	}
  .desktop  {
    display:none;
  }

.click-nav {
    top: 15px !important;
}
.mobile {
  display: block;
}
.mobile {
   margin-top: 12px;
   margin-bottom: 60px;
}
  .mobile-thumb {
   
        margin: 60px 0px;
    text-align: center;
    font-family: Karla, Arial,Sans-serif;
    font-size: 60%;
  }

  #click-nav {
    top: 15px !important;
  }
.site-title {
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    margin: 15px 0px;
    font-size: 30px !important;
    z-index: 99 !important;
        margin: 0px 0px !important;
}
#cattop {
  font-weight: 100;
  margin-bottom: 0;
}
.cap h2:nth-child(2) {
      margin-top: 0px;
}
.mobile-thumb {
      padding: 0px 15px;
}
  .mobile-thumbs a {
    color:black;
    text-decoration: none;
    text-transform: uppercase;
  }

    #page #masthead a {
      text-decoration: none;
      color: black;
         font-size: 12px;
      letter-spacing: 4px;
      font-family: Karla;
       font-family: Karla, Arial,Sans-serif;
  }

  #click-nav .mobile span {
  	    width: 16px;
    height: 2px;
    background-color: red;
    display: block;
    margin-bottom: 3px;
  }
  #click-nav:after {
    display: none !important;

	}
	.nav-open .mobile span:nth-child(3) {
		display: none !important;
	}

	.nav-open .mobile span:nth-child(1) {
		transform: rotate(50deg);
	}

	.nav-open .mobile span:nth-child(2) {
		transform: rotate(-50deg);
		    margin-top: -5px;
	}

	#click-nav .mobile {
		margin-top: 6px !important;
	}
}
@media only screen and (max-device-width: 480px) {

  .mobile-thumbs {
    margin-top: 45px;
  }

  .large-menu h1 {
	    color: white;
	    font-size: 20px;
	}

	.large-menu p {
		    font-size: 12px;
	}
}

.nav-open {
    color: white;
}

@media screen and (max-width: 660px) {

	.mobile-thumb {
		    padding: 15px;
		    max-width: 600px;
		    margin: 0 auto !important;
		    min-width: auto;
		    width:100%;
	}
}



.loading{
	text-align:center;
	color:red;
	position: relative;
	top:45%;
	transform: translateY(40%);
	font-size: 10px;
}

.loading:before,
.loading:after{
	content: "";
	display: inline-block;
	vertical-align: middle;
	margin: 0 0.7em;
	width: 10em;
	border-bottom: 1px solid red;
  
  -moz-animation: loading 3s forwards linear;
  -webkit-animation: loading 3s forwards linear;
  animation: loading 3s forwards linear;
  
  -moz-animation-iteration-count:infinite;
 -webkit-animation-iteration-count:infinite;
  animation-iteration-count:infinite;
}



/*Animation time*/
@-webkit-keyframes loading {
  0% {width: 0em; opacity:0.1}
  70% {width: 8em; opacity:1.0}
  100% {width: 10em; opacity:0.0}
}


@-moz-keyframes loading {
  0% {width: 0em; opacity:0.1}
  70% {width: 8em; opacity:1.0}
  100% {width: 10em; opacity:0.0}
}
@keyframes loading {
  0% {width: 0em; opacity:0.1}
  70% {width: 8em; opacity:1.0}
  100% {width: 10em; opacity:0.0}
}

.loading-bar #page-wrapper {
	position: relative;
	height: 100vh;
}

.rotating {
	border: 1px solid gray !important;
}

ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

.return a {
	color: black;
    letter-spacing: 2px;
}

</style>
<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'adeline' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				
			<?php
			endif; ?>
		</div><!-- .site-branding -->


		<!-- <nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'adeline' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav> -->
		<nav id="click-nav">
			<div class="mobile">
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="desktop">MENU</div>
		</nav>

		<div class="large-menu">
			<div id="vertical-align">
				<div>
					<h1><?php bloginfo( 'name' ); ?></h1>
					<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
				</div>
				<div>
					<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
				</div>
				<div class="social">
					<?php wp_nav_menu( array( 'theme_location' => 'menu-2', 'menu_id' => 'social' ) ); ?>
					<br>
					<?php wp_nav_menu( array( 'theme_location' => 'menu-3', 'menu_id' => 'contact' ) ); ?>
				<!-- 	<?php dynamic_sidebar( 'sidebar-1' ); ?> -->
				</div>
			</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">

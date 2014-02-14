<?php
/**
 * The Header for our theme.
 * @package BestCorporate
 * @since BestCorporate 2.2
 */
?>
<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<?php global $bc_options;?>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title>
<?php wp_title();?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php echo get_stylesheet_uri(); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="headerimg">
  <header id="branding" role="banner">
    <hgroup>
      <h1 id="site-title">
        <?php if ( get_header_image() != '' ) { ?>
        <a class="logo_img" style="background-image: url(<?php header_image(); ?>)" href="<?php echo home_url(); ?>"  title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></a>
        <?php }
			else { ?>
        <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></a>
        <?php } ?>
      </h1>
      <h2 id="site-description">
        <?php bloginfo( 'description' ); ?>
      </h2>
    </hgroup>
    <nav id="access" role="navigation">
      <h1 class="assistive-text section-heading">
        <?php _e( 'Main menu', 'bestcorporate' ); ?>
      </h1>
      <div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'bestcorporate' ); ?>">
        <?php _e( 'Skip to content', 'bestcorporate' ); ?>
        </a></div>
      <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
    </nav>
    <!-- #access -->
  </header>
</div>
<div id="page" class="hfeed">
<?php do_action( 'before' ); ?>
<!-- #branding -->
<div id="main">
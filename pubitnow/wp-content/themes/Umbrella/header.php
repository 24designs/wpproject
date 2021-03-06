<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fabthemes
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile"   href="http://gmpg.org/xfn/11">
<link rel="pingback"  href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

<div id="top-bar">
<div class="row">
<div class="columns medium-4">
<div class="tb-box">
<div class="tb-icon">
<i class="fa fa-envelope"></i>
</div>
<div class="tb-data">
<span> <?php _e('Mail us','fabthemes');?> </span>
<?php echo ft_of_get_option('fabthemes_email','');?>
</div>
</div>
</div>

<div class="columns medium-4">
<div class="tb-box">
<div class="tb-icon">
<i class="fa fa-clock-o"></i>
</div>
<div class="tb-data">
<span> <?php _e('Working Hours','fabthemes');?> </span>
<?php echo ft_of_get_option('fabthemes_address','');?>
</div>
</div>
</div>
</div>
</div>

	<header id="masthead" class="site-header" role="banner">
		<div class="row">
			<div class="columns medium-6">
				<div class="site-branding">
					
	<?php if (get_theme_mod(FT_scope::tool()->optionsName . '_logo', '') != '') { ?>
				<h1 class="site-title logo"><a class="mylogo" rel="home" href="<?php bloginfo('siteurl');?>/" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><img relWidth="<?php echo intval(get_theme_mod(FT_scope::tool()->optionsName . '_maxWidth', 0)); ?>" relHeight="<?php echo intval(get_theme_mod(FT_scope::tool()->optionsName . '_maxHeight', 0)); ?>" id="ft_logo" src="<?php echo get_theme_mod(FT_scope::tool()->optionsName . '_logo', ''); ?>" alt="" /></a></h1>
	<?php } else { ?>
				<h1 class="site-title logo"><a id="blogname" rel="home" href="<?php bloginfo('siteurl');?>/" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
	<?php } ?>

				</div>
			</div>
			<div class="columns medium-6">
				
			</div>
		</div>

		<div class="top-menu">
			<div class="row">
				<div class="column small-12">
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'umbrella' ) ); ?>
					</nav>
				</div>
			</div>
		</div>

	</header>

	<div id="content" class="site-content">
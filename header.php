<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package dazzling
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
 <!--  CDN Bootstrap CSS-->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- CDN Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">

    <!--  Style -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>@@/css/style.css">


<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			    <span class="sr-only"><?php _e( 'Toggle navigation', 'dazzling' ); ?></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			  </button>

				<?php if( get_header_image() != '' ) : ?>

					<div id="logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
					</div><!-- end of #logo -->

				<?php endif; // header image was removed ?>

				<?php if( !get_header_image() ) : ?>

					<div id="logo">
						<span class="site-title"><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
					</div><!-- end of #logo -->
            <?php $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
                    <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
            <?php
            endif; ?>

				<?php endif; // header image was removed (again) ?>

			</div>
				<?php dazzling_header_menu(); ?>
		</div>
	</nav><!-- .site-navigation -->

        <div class="top-section">
		<?php dazzling_featured_slider(); ?>
		<?php dazzling_call_for_action(); ?>
        </div>
        <div id="content" class="site-content container">

            <div class="container main-content-area"><?php

                global $post;
                if( get_post_meta($post->ID, 'site_layout', true) ){
                        $layout_class = get_post_meta($post->ID, 'site_layout', true);
                }
                else{
                        $layout_class = of_get_option( 'site_layout' );
                }
                if( is_home() && is_sticky( $post->ID ) ){
                        $layout_class = of_get_option( 'site_layout' );
                }
                ?>
                <div class="row <?php echo $layout_class; ?>">

<!DOCTYPE html>
<html>
  <head>
    <mta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
      <?php wp_head(); ?>
  </head>
  <?php get_header(); ?>
  <body>
<html>
<head>
</head>
<body>
    <nav id="site-navigation" class="main-navigation">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'main-menu',
                'menu_id'     => 'primary-menu',
            )
        );
        ?>
    </nav>
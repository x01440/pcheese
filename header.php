<?php

ini_set("include_path", '/home/evolutiondigital/php:' . ini_get("include_path") );

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="searchhead">
    <div class="searchheader">
<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('search-widget') ) ?>
    </div>
</div>
<div class="container">

    <!-- site-header -->

    <header class="site-header">
<div class="headmenu">
  <div id="Userlogin">
    <?php
    $current_user = wp_get_current_user();
    if ( 0 == $current_user->ID ) {
        echo "Hello Visitor," ;
    } else {
       echo "Hello $current_user->user_login," ;
    }
    ?>
  </div>

    <img id="welcome" src="<?php echo get_stylesheet_directory_uri(); ?>/images/b.png">
<?php wp_nav_menu(array('theme_location' => 'header')); ?>
</div>
<a href="<?php echo home_url(); ?>">

        <img id="topL" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png"/>
        </a>
        <div class="block-cart-header">
<div class="block-cart-wrap">
    <h3 style="
    margin: 0;
    float: left;
    padding: 0px 0px 0px 0px;
    font-size: 16px;
    color: #3562ad;
">Cart:</h3>
 <div class="block-content">
<?php global $woocommerce; ?>
 <a class="minicart" href="<?php echo $woocommerce->cart->get_cart_url(); ?>"
title="<?php _e('Cart View', 'woothemes'); ?>">
<?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'),
 $woocommerce->cart->cart_contents_count);?>  -
<?php echo $woocommerce->cart->get_cart_total(); ?>
</a>
</div>
</div>
</div>
</header>
<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
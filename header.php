<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Vendd
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
<!--    <link rel="preload" href="./style.css?v=--><?php //echo time(); ?><!--" as="style">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--    <link rel="stylesheet" type="text/css" href="./style.css?v=--><?php //echo time(); ?><!--">-->
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="header">
    <div class="header-background">
        <div class="header-header">
            <a href="http://192.168.0.113/aeon/">
                <nav class="main-logo"></nav>
            </a>
            <ul>
                <li style="margin-left: 50px; font-family: SVN-Gotham;font-style: normal;font-weight: 500;font-size: 16px;line-height: 25px;letter-spacing: 0.04em;color: #FFFFFF;">
                    Login/Register
                </li>
                <li style="background: url('http://demo.intellstock.com/wp-content/themes/theme-wp-vendd-cus/screenshots/notifications_24px_outlined.svg'); width: 24px; height: 24px; margin-left: 50px"></li>
                <a href="<?php echo edd_get_checkout_uri(); ?>">
                    <li style="background: url('http://demo.intellstock.com/wp-content/themes/theme-wp-vendd-cus/screenshots/Cart.png'); width: 16px; height: 16px; margin-left: 50px"></li>
                </a>
            </ul>
        </div>
        <div style="width: 100%; display: flex; flex-direction: row; justify-content: space-around;">
            <nav class="main-menu">
                <?php if (!vendd_is_checkout() && !vendd_is_landing_page() && has_nav_menu('main_menu')) : ?>
                    <nav id="site-navigation" class="main-navigation" role="navigation">
                        <span class="menu-toggle"><span
                                    class="vendd-menu-toggle-text"><?php _e('Menu', 'vendd'); ?></span><i
                                    class="fa fa-bars vendd-menu-icon"></i></span>
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'main_menu',
                            'menu_class' => 'clear nav-menu',
                            'fallback_cb' => '__return_false'
                        ));
                        ?>
                    </nav><!-- #site-navigation -->
                <?php endif ?>
            </nav>
            <nav class="header-info">
                <p style="margin-bottom: 0px; font-size: 18px; line-height: 25px; font-family: SVN-Gotham-thin; font-weight: bold; position: relative; bottom: 58px; letter-spacing: 0.04em">Siêu chợ thông tin </p>
                    <p style="margin-bottom: 0px; position: relative; bottom: 37px; letter-spacing: 0.04em; font-weight: bold; opacity: 0.85;">NGUỒN CUNG CẤP BÁO CÁO ĐÁNG TIN CẬY VÀ CHÍNH XÁC NHẤT VIỆT NAM</p>
                <div class="header-search">
                    <form role="search" method="get">
                        <div class="search-template">
                            <!--                    <p style="font-family: Gotham; font-style: normal; font-weight: normal; font-size: 16px; line-height: 13px; letter-spacing: 0.1px; color: rgba(255, 255, 255, 0.8); position: relative; left: 30px;">-->
                            <label class="screen-reader-text" for="s"><?php _e('Search for:', 'vendd'); ?></label>
                            <input type="search" placeholder="Search in here" name="s"
                                   value="<?php echo esc_attr(get_search_query()); ?>"
                                   autocomplete="off">
                            <!--                        <input class="screen-reader-text" type="submit" id="search-submit" value="Search" />-->

                            <button onclick="<?php echo esc_attr(get_search_query()); ?>">
                                <!--                    <a href="#"-->
                                <!--                       style="color: #FFF; text-decoration: none; width: 100%; height: 100%;align-items: center; display: flex; justify-content: center;">-->
                                <img src="http://demo.intellstock.com/wp-content/themes/theme-wp-vendd-cus/screenshots/search.png"
                                     style="width: 20px; height: 20px">
                                <!--                    </a>-->
                            </button>
                        </div>
                    </form>
                </div>
            </nav>
        </div>
    </div>
</div>
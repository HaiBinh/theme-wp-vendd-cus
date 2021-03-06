<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Vendd
 */
?><!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="header-2">
    <a href="<?php echo(get_home_url())?>">
        <div style="background: url('<?php echo(get_home_url() . '/wp-content/themes/theme-wp-vendd-cus/screenshots/Logo-02%203.png')?>'); width: 30%; max-width: 229px; height: 38px; position: relative; left: 12%; top: 24px">

        </div>
    </a>
    <ul style="list-style: none; color: #FFF; display: flex; flex-direction: row; float: right; margin-right: 160px">
        <li style="margin-left: 50px; font-family: SVN-Gotham;font-style: normal;font-weight: 500;font-size: 16px;line-height: 25px;letter-spacing: 0.04em;color: #FFFFFF;">Login | Register</li>
        <li style="background: url('<?php echo(get_home_url() . '/wp-content/themes/theme-wp-vendd-cus/screenshots/notifications_24px_outlined.svg')?>'); width: 24px; height: 24px; margin-left: 50px"></li>
        <a href="<?php echo edd_get_checkout_uri(); ?>">
            <li style="background: url('<?php echo(get_home_url() . '/wp-content/themes/theme-wp-vendd-cus/screenshots/Cart.png')?>'); width: 16px; height: 16px; margin-left: 50px; position: relative; top: 5px">
            </li>
        </a>


<!--        --><?php //if ( vendd_edd_is_activated() && ! vendd_is_checkout() && ! vendd_is_landing_page() ) : ?>
<!--            --><?php //if ( apply_filters( 'vendd_show_header_cart_info', true, $post ) ) : ?>
<!--                <a href="--><?php //echo edd_get_checkout_uri(); ?><!--" class="header-cart">-->
<!--                    <i class="fa fa-shopping-cart"></i>-->
<!--                    --><?php //printf( __( 'Cart total: %s', 'vendd' ), '<span class="header-cart-total">' . edd_currency_filter( edd_format_amount( edd_get_cart_total() ) ) . '</span>' ); ?>
<!--                </a>-->
<!--            --><?php //endif; ?>
<!--        --><?php //endif; ?>
    </ul>
</div>


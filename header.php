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
<div id="wpadminbar" class="nojq">
    <a class="screen-reader-shortcut" href="#wp-toolbar" tabindex="1">Chuyển đến thanh công cụ</a>
    <div class="quicklinks" id="wp-toolbar" role="navigation" aria-label="Thanh công cụ">
        <ul id="wp-admin-bar-root-default" class="ab-top-menu"><li id="wp-admin-bar-wp-logo" class="menupop"><a class="ab-item" aria-haspopup="true" href="http://localhost/hb/wp-admin/about.php"><span class="ab-icon"></span><span class="screen-reader-text">Giới thiệu về WordPress</span></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-wp-logo-default" class="ab-submenu"><li id="wp-admin-bar-about"><a class="ab-item" href="http://localhost/hb/wp-admin/about.php">Giới thiệu về WordPress</a></li></ul><ul id="wp-admin-bar-wp-logo-external" class="ab-sub-secondary ab-submenu"><li id="wp-admin-bar-wporg"><a class="ab-item" href="https://vi.wordpress.org/">WordPress.org</a></li><li id="wp-admin-bar-documentation"><a class="ab-item" href="https://codex.wordpress.org/">Tài liệu</a></li><li id="wp-admin-bar-support-forums"><a class="ab-item" href="https://wordpress.org/support/">Hỗ trợ</a></li><li id="wp-admin-bar-feedback"><a class="ab-item" href="https://wordpress.org/support/forum/requests-and-feedback">Thông tin phản hồi</a></li></ul></div></li><li id="wp-admin-bar-site-name" class="menupop"><a class="ab-item" aria-haspopup="true" href="http://localhost/hb/wp-admin/">Intell Stock</a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-site-name-default" class="ab-submenu"><li id="wp-admin-bar-dashboard"><a class="ab-item" href="http://localhost/hb/wp-admin/">Bảng tin</a></li></ul><ul id="wp-admin-bar-appearance" class="ab-submenu"><li id="wp-admin-bar-themes"><a class="ab-item" href="http://localhost/hb/wp-admin/themes.php">Giao diện</a></li><li id="wp-admin-bar-widgets"><a class="ab-item" href="http://localhost/hb/wp-admin/widgets.php">Widget</a></li><li id="wp-admin-bar-menus"><a class="ab-item" href="http://localhost/hb/wp-admin/nav-menus.php">Menu</a></li><li id="wp-admin-bar-background" class="hide-if-customize"><a class="ab-item" href="http://localhost/hb/wp-admin/themes.php?page=custom-background">Nền</a></li></ul></div></li><li id="wp-admin-bar-customize" class="hide-if-no-customize"><a class="ab-item" href="http://localhost/hb/wp-admin/customize.php?url=http%3A%2F%2Flocalhost%2Fhb%2F">Tùy biến</a></li><li id="wp-admin-bar-updates"><a class="ab-item" href="http://localhost/hb/wp-admin/update-core.php" title="10 cập nhật cho plugin, 1 cập nhật cho giao diện, Cập nhật bản dịch"><span class="ab-icon"></span><span class="ab-label">12</span><span class="screen-reader-text">10 cập nhật cho plugin, 1 cập nhật cho giao diện, Cập nhật bản dịch</span></a></li><li id="wp-admin-bar-comments"><a class="ab-item" href="http://localhost/hb/wp-admin/edit-comments.php"><span class="ab-icon"></span><span class="ab-label awaiting-mod pending-count count-0" aria-hidden="true">0</span><span class="screen-reader-text comments-in-moderation-text">0 bình luận cần kiểm duyệt</span></a></li><li id="wp-admin-bar-new-content" class="menupop"><a class="ab-item" aria-haspopup="true" href="http://localhost/hb/wp-admin/post-new.php"><span class="ab-icon"></span><span class="ab-label">Mới</span></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-new-content-default" class="ab-submenu"><li id="wp-admin-bar-new-post"><a class="ab-item" href="http://localhost/hb/wp-admin/post-new.php">Bài viết</a></li><li id="wp-admin-bar-new-media"><a class="ab-item" href="http://localhost/hb/wp-admin/media-new.php">Tập tin</a></li><li id="wp-admin-bar-new-page"><a class="ab-item" href="http://localhost/hb/wp-admin/post-new.php?post_type=page">Trang</a></li><li id="wp-admin-bar-new-elementor_library"><a class="ab-item" href="http://localhost/hb/wp-admin/post-new.php?post_type=elementor_library">Template</a></li><li id="wp-admin-bar-new-download"><a class="ab-item" href="http://localhost/hb/wp-admin/post-new.php?post_type=download">Tải về captcha</a></li><li id="wp-admin-bar-new-user"><a class="ab-item" href="http://localhost/hb/wp-admin/user-new.php">Thành viên</a></li><li id="wp-admin-bar-new_content_smart_slider"><a class="ab-item" href="http://localhost/hb/wp-admin/admin.php?page=smart-slider3#createslider">Slider [Smart Slider 3]</a></li></ul></div></li><li id="wp-admin-bar-smart_slider_3" class="menupop"><a class="ab-item" aria-haspopup="true" href="http://localhost/hb/wp-admin/admin.php?page=smart-slider3">Smart Slider</a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-smart_slider_3-default" class="ab-submenu"><li id="wp-admin-bar-smart_slider_3_dashboard"><a class="ab-item" href="http://localhost/hb/wp-admin/admin.php?page=smart-slider3">Dashboard</a></li><li id="wp-admin-bar-smart_slider_3_create_slider"><a class="ab-item" href="http://localhost/hb/wp-admin/admin.php?page=smart-slider3#createslider">Create slider</a></li><li id="wp-admin-bar-smart_slider_3_edit" class="menupop"><a class="ab-item" aria-haspopup="true" href="http://localhost/hb/wp-admin/admin.php?page=smart-slider3"><span class="wp-admin-bar-arrow" aria-hidden="true"></span>Edit slider</a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-smart_slider_3_edit-default" class="ab-submenu"><li id="wp-admin-bar-smart_slider_3_slider_1"><a class="ab-item" href="http://localhost/hb/wp-admin/admin.php?page=smart-slider3&amp;nextendcontroller=slider&amp;nextendaction=edit&amp;sliderid=1">#1 - Sample Slider</a></li></ul></div></li></ul></div></li></ul><ul id="wp-admin-bar-top-secondary" class="ab-top-secondary ab-top-menu"><li id="wp-admin-bar-search" class="admin-bar-search"><div class="ab-item ab-empty-item" tabindex="-1"><form action="http://localhost/hb/" method="get" id="adminbarsearch"><input class="adminbar-input" name="s" id="adminbar-search" type="text" value="" maxlength="150"><label for="adminbar-search" class="screen-reader-text">Search</label><input type="submit" class="adminbar-button" value="Search"></form></div></li><li id="wp-admin-bar-my-account" class="menupop with-avatar"><a class="ab-item" aria-haspopup="true" href="http://localhost/hb/wp-admin/profile.php">Chào, <span class="display-name">admin</span><img alt="" src="http://0.gravatar.com/avatar/f59f9efd2a58dbdb8b9e0fffb37449d7?s=26&amp;d=mm&amp;r=g" srcset="http://0.gravatar.com/avatar/f59f9efd2a58dbdb8b9e0fffb37449d7?s=52&amp;d=mm&amp;r=g 2x" class="avatar avatar-26 photo" height="26" width="26"></a><div class="ab-sub-wrapper"><ul id="wp-admin-bar-user-actions" class="ab-submenu"><li id="wp-admin-bar-user-info"><a class="ab-item" tabindex="-1" href="http://localhost/hb/wp-admin/profile.php"><img alt="" src="http://0.gravatar.com/avatar/f59f9efd2a58dbdb8b9e0fffb37449d7?s=64&amp;d=mm&amp;r=g" srcset="http://0.gravatar.com/avatar/f59f9efd2a58dbdb8b9e0fffb37449d7?s=128&amp;d=mm&amp;r=g 2x" class="avatar avatar-64 photo" height="64" width="64"><span class="display-name">admin</span></a></li><li id="wp-admin-bar-edit-profile"><a class="ab-item" href="http://localhost/hb/wp-admin/profile.php">Chỉnh sửa hồ sơ của tôi</a></li><li id="wp-admin-bar-logout"><a class="ab-item" href="http://localhost/hb/wp-login.php?action=logout&amp;_wpnonce=62a3a96836">Đăng xuất</a></li></ul></div></li></ul>			</div>
    <a class="screen-reader-shortcut" href="http://localhost/hb/wp-login.php?action=logout&amp;_wpnonce=62a3a96836">Đăng xuất</a>
</div>
<div class="header">
    <div class="header-background" style="background: url('<?php echo(get_home_url() . '/wp-content/themes/theme-wp-vendd-cus/screenshots/nen.png')?>'); width: 100%; background-size: cover;">
        <div class="header-header">
            <a href="<?php get_home_url()?>">
                <nav class="main-logo" style="background: url('<?php echo(get_home_url() . '/wp-content/themes/theme-wp-vendd-cus/screenshots/Logo-02 3.png')?>');"></nav>
            </a>
            <ul>
                <li style="margin-left: 50px; font-family: SVN-Gotham;font-style: normal;font-weight: 500;font-size: 16px;line-height: 25px;letter-spacing: 0.04em;color: #FFFFFF;">
                    Login/Register
                </li>
                <li style="background: url('<?php echo(get_home_url() . '/wp-content/themes/theme-wp-vendd-cus/screenshots/notifications_24px_outlined.svg')?>'); width: 24px; height: 24px; margin-left: 50px"></li>
                <a href="<?php echo edd_get_checkout_uri(); ?>">
                    <li style="background: url('<?php echo(get_home_url() . '/wp-content/themes/theme-wp-vendd-cus/screenshots/Cart.png')?>'); width: 16px; height: 16px; margin-left: 50px"></li>
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
                                <img src="<?php echo(get_home_url() . '/wp-content/themes/theme-wp-vendd-cus/screenshots/search.png')?>"
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
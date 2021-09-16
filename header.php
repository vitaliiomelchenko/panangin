<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/bootstrap-5.0.2-dist/css/bootstrap-grid.min.css">
</head>
<?php wp_head(); ?>
<body <?php body_class(); ?>>
    <header class="header">
        <div class="container">
            <div class="row">
                <a href="<?php echo get_home_url(); ?>" class="col-lg-auto header__logoWrapper">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/global/logo.svg" alt="logo" class="col-lg-auto header__logo">
                </a>
                <?php
                wp_nav_menu( [
                    'theme_location'  => 'Main menu',
                    'menu'            => 'header-menu',
                    'container'       => false,
                    'menu_class'      => 'row header__menu__row col-lg-auto ml-lg-auto',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                ] );
                ?>
                <svg class="menu-toggle col-auto" width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M13.4444 7.3999H1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M17 1H1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M17 13.8H1" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <svg class="menu-toggle-active col-auto" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 1L1 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M1 1L15 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </div>
    </header>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/main.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/bootstrap-5.0.2-dist/css/bootstrap-grid.min.css">
</head>
	<?php wp_head(); ?>
<header>
<nav role="navigation">
            <div id="menuToggle">
                <input type="checkbox" />
                <span></span>
                <span style="width: 25px;"></span>
                <span></span>
                
                    <ul id="menu">
                        <div class="burger__wrapper" style="width:87%;">
                        <a href="<?php echo get_home_url(); ?>" class="burgerMenu__logo">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.png" alt="">
                        </a>
                        <?php 
                                    wp_nav_menu( [
                                        'theme_location'  => 'Main menu',
                                        'menu'            => 'header-menu',
                                        'container'       => 'false',
                                        'menu_class'      => 'header__menu__row col-lg-auto offset-lg-1',
                                        'menu_id'         => '',
                                        'items_wrap'      => '<li class="header__menuItem col-lg-auto ">%3$s</li>',
                                    ] );
                                ?>
                        </div>
                    </ul>
                </div>
            </nav>
    <div class="container">
        <div class="row">
        <a href="<?php echo get_home_url(); ?>" class="col-lg-auto header__logoWrapper">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.png" alt="">
        </a>
        <ul class="row col-lg-auto header__menu__row offset-lg-1">
            <?php 
                            wp_nav_menu( [
                                'theme_location'  => 'Main menu',
                                'menu'            => 'header-menu',
                                'container'       => 'false',
                                'menu_class'      => 'header__menu__row col-lg-auto offset-lg-1',
                                'menu_id'         => '',
                                'items_wrap'      => '<li class="header__menuItem col-lg-auto ">%3$s</li>',
                            ] );
                        ?>
        </ul>
    </div>
</div>
</header>
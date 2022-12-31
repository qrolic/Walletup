<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head(); ?>
</head>
<body>
    
    <div class="wrapper">
        <!--header start-->
            <header>
                <div class="header">
                    <div class="container">
                        <div class="header__inner">
                            <div class="toggle-menu">
                                <i class="fa-solid fa-bars"></i>
                            </div>
                            <div class="header__inner--menu">
                                <?php
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'walletup-header-menu'
                                        )
                                    );
                                ?>
                            </div>
                            <div class="header__inner--button">
                            <div class="admin-bar">
                                <div class="login-info">
                                    <?php if ( is_user_logged_in() ) {
                                        global $current_user;
                                            wp_get_current_user();
                                            echo ' <a href="#" class="username"> ' . $current_user->user_login . "</a>"; 
                                            get_currentuserinfo();     
                                            echo get_avatar( $current_user->ID, 64 );
                                    } ?>
                                </div>
                                <div class="submenu">
                                    <?php wp_nav_menu(
                                        array(
                                            'theme_location' => 'walletup-submenu-menu'
                                        )
                                    ); ?>
                                </div>
                            </div>
                                
                                <a href="<?php the_field('header_contact_btn_link','option'); ?>" class="contact-btn"><?php the_field('header_contact_btn_text','option'); ?></a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        <!--header end-->
</body>
</html>
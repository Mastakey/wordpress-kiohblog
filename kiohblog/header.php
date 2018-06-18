<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo bloginfo('name'); ?><?php wp_title( '|', true, 'left' ); ?></title>
    <?php
        wp_head();
    ?>
</head>
<body <?php body_class(); ?>>
    <div class="flex-container">
        <div class="container">
            <header class="header-container">
                <div class="site-header">
                    <div class="site-header-left">
                        <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
                        <h5><?php bloginfo('description'); ?></h5>
                    </div>
                    <div class="site-header-right">
                        <nav class="site-nav">
                            <?php
                                if (is_user_logged_in()){
                                    $args = array('theme_location' => 'primary_nologin');
                                }
                                else {
                                    $args = array('theme_location' => 'primary_login');
                                }
                                
                            ?>
                            <?php wp_nav_menu( $args ); ?>
                        </nav>
                        <div class="header-search">
                            <?php get_search_form(); ?>
                        </div>
                    </div>

                </div>
            </header>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header id="top">
            <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                    <div class="row">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#ieee-sb-rgbg-navbar" aria-expanded="False">
                                <span class="sr-only">Toogle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="/" class="brand-image">
                                <img src="<?php bloginfo('template_url') ?>/assets/ieee-sb-logo-header.svg" alt="IEEE Student Branch Regensburg Logo"/>
                            </a>
                        </div>

                        <?php
                        $options = array(
                            'theme_location'    =>  'header-navigation-menu',
                            'container'         =>  'div',
                            'container_class'   =>  'collapse navbar-collapse navbar-right',
                            'container_id'      =>  'ieee-sb-rgbg-navbar',
                            'menu_class'        =>  'nav navbar-nav',
                            'depth'             =>  1
                        );
                        wp_nav_menu($options);
                        ?>
                    </div>
                </div>
            </nav>
        </header>

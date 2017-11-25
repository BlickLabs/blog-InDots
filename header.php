<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shoreditch
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/lib/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

    <?php wp_head(); ?>

    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/custom-header.css' ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/custom-footer.css' ?>">
</head>

<body <?php body_class(); ?>>
<script
        src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
        crossorigin="anonymous"></script>
<script>

    $(document).ready(function () {
        /*$("body").click(function (event) {
            console.log(event.target, 'target onready--------');
            if (event.target.id === 'bars') {
                slide();
            } else {
                if (event.target.tagName !== 'UL')
                    close();
            }
        });*/
        $("body").bind("touchstart", function (event) {
            console.log(event.target, 'target ontouchstart--------');
            if (event.target.id === 'bars') {
                console.log('ontouchstart if');
                slide();
            } else {
                console.log('ontouchstart else');
                if (event.target.tagName !== 'UL')
                    close();
            }
        });
    });

    function close() {
        console.log('close');
        if (document.querySelector('#hamburgerMenu').classList.contains('showMenu')) {
            console.log('has class showMenu');
            setTimeout(function () {
                document.querySelector('#hamburgerMenu').classList.remove('showMenu');
                document.querySelector('#bars').classList.remove('hiddeOnMobil');
                document.querySelector('#hamburgerMenu').classList.remove('open-hamburgerMenu');
            }, 000);
        }
    }

    function slide() {
        console.log('slide');
        if (document.querySelector('#hamburgerMenu').classList.contains('showMenu')) {
            console.log('slide if');

            setTimeout(function () {
                document.querySelector('#hamburgerMenu').classList.remove('showMenu');
                document.querySelector('#bars').classList.remove('hiddeOnMobil');
                document.querySelector('#hamburgerMenu').classList.remove('open-hamburgerMenu');
            }, 000);
        } else {
            console.log('slide else');
            document.querySelector('#hamburgerMenu').classList.add('showMenu');
            document.querySelector('#hamburgerMenu').classList.add('open-hamburgerMenu');
            document.querySelector('#bars').classList.add('hiddeOnMobil');
        }
    }
</script>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'shoreditch'); ?></a>
    <header class="header-navbar" id="principalHeader">
        <input type="checkbox" id="navbar-trigger"/>
        <span class="fa fa-bars hiddeOnWeb showMovil" id="bars" for="navbar-trigger"
              style='position: fixed;right: 40px;color: white;top: 35px;'></span>
        <a href="http://indots.com/" class="centerLogo" id="logo">
            <img class="header-navbar-logo"
                 src="<?php echo get_template_directory_uri() . '/img/icons/indots-logo.png' ?>"/>
        </a>
        <ul class="header-navbar-list animated" id="hamburgerMenu">
            <li id="imgMenu">
                <img class="img-blog-menu"
                     src="<?php echo get_template_directory_uri() . '/img/icons/white-indots-logo.png' ?>">
            </li>
            <li class="header-navbar-list-item" hcolor="white">
                <a class="header-navbar-list-item-link" href="http://indots.com">
                    Inicio
                </a>
            </li>
            <li class="header-navbar-list-item" hcolor="white">
                <a class="header-navbar-list-item-link" href="http://indots.com/recetas/">
                    Qué es InDots
                </a>
            </li>
            <li class="header-navbar-list-item" hcolor="white">
                <a class="header-navbar-list-item-link" href="http://indots.com/videos/">
                    Nuestros cursos
                </a>
            </li>
            <li class="header-navbar-list-item" hcolor="white">
                <a class="header-navbar-list-item-link flash-indots" href="http://indots.com/servicios/">
                    Flash InDots
                </a>
            </li>
            <li class="header-navbar-list-item" hcolor="white">
                <a class="header-navbar-list-item-link" href="http://indots.com/acerca/">
                    Contacto
                </a>
            </li>
            <li class="header-navbar-list-item select" hcolor="white">
                <a class="header-navbar-list-item-link" href="http://blog.indots.com/">
                    Blog
                </a>
            </li>
            <li class="header-navbar-list-item" hcolor="white">
                <a class="header-navbar-list-item-link" href="http://indots.com/contacto/">
                    Iniciar Sesión
                </a>
            </li>
        </ul>

    </header>
    <div id="content" class="site-content">
        <?php if (get_header_image()) : ?>
            <div class="header-image">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <img src="<?php header_image(); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>"
                         height="<?php echo esc_attr(get_custom_header()->height); ?>" alt="">
                </a>
            </div><!-- .header-image -->
        <?php endif; // End header image check. ?>

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

  <nav class="site-navbar">
    <div class="site-navbar__desktop-logo-container">
      <a href="http://indots.getmore.mx/index.html">
        <img class="navbar-logo-mobile" src="<?php echo get_template_directory_uri() . '/img/logo/logo-full.png' ?>" alt="Logo">
      </a>
    </div>
    <div class="site-navbar__menu-container">
      <div class="site-navbar__mobile-logo-container">
        <a href="http://indots.getmore.mx/index.html"><img src="<?php echo get_template_directory_uri() . '/img/logo/logo-full.png' ?>" alt="Logo"></a>
      </div>
      <div class="site-navbar__menu">
        <a href="http://indots.getmore.mx/index.html" class="site-navbar__menu-link menu-link">
          <div class="diamond"></div>
          <span class="indots-font-cabin-regular">Inicio</span>
        </a>
        <a href="http://indots.getmore.mx/que-es-indots.html" class="site-navbar__menu-link menu-link">
          <div class="diamond"></div>
          <span class="indots-font-cabin-regular">Qué es indots</span>
        </a>
        <a href="http://indots.getmore.mx/nuestros-cursos.html" class="site-navbar__menu-link menu-link">
          <div class="diamond"></div>
          <span class="indots-font-cabin-regular">Nuestros cursos</span>
        </a>
        <a href="http://indots.getmore.mx/flash-indots.html" class="site-navbar__menu-link menu-link">
          <div class="diamond"></div>
          <span class="indots-font-cabin-regular">Videos</span>
        </a>
        <a href="http://indotsverde.com" class="site-navbar__menu-link menu-link">
          <div class="diamond"></div>
          <span class="indots-font-cabin-regular">Indots verde</span>
        </a>
        <a href="http://blog.indots.getmore.mx/" class="site-navbar__menu-link menu-link link-active">
          <div class="diamond show-diamond"></div>
          <span class="indots-font-cabin-regular">Blog</span>
        </a>
        <a href="http://indots.getmore.mx/contacto.html" class="site-navbar__menu-link menu-link">
          <div class="diamond"></div>
          <span class="indots-font-cabin-regular">Contacto</span>
        </a>
      </div>
    </div>
    <div data-attribute="" class="navbar-hamburguer-visibility"  id="hamburgerMenu">
      <div class="navbar-hamburguer" data-attribute="">
        <div class="align-content-hamburguer" data-attribute="">
          <div class="line-hamburguer-base line-hamburguer-lg" data-attribute=""></div>
          <div class="line-hamburguer-base line-hamburguer-lg margin-vertical-4px" data-attribute=""></div>
          <div class="line-hamburguer-base line-hamburguer-lg" data-attribute=""></div>
        </div>
      </div>
    </div>
    <div class="hamburger-menu-container" id="menuContainer" data-attribute="">
      <div class="hamburger-menu-header" data-attribute="">
        <div class="" data-attribute="">
          <a href="http://indots.getmore.mx/index.html" data-attribute="">
            <img class="hamburger-logo" src="<?php echo get_template_directory_uri() . '/img/logo/logo-full.png' ?>" data-attribute="">
          </a>
        </div>
        <div class="hamburger-close-container" id="hideHamburger">
          <img class="hamburger-close" src="<?php echo get_template_directory_uri() . '/img/icons/close-menu.png' ?>">
        </div>
      </div>
      <div class="hamburger-menu-body" data-attribute="">
        <a data-attribute="" href="http://indots.getmore.mx/index.html" class="hamburger-menu-link">
          <span class="hamburger-text indots-font-cabin-regular">Inicio</span>
        </a>
        <a data-attribute="" href="http://indots.getmore.mx/que-es-indots.html" class="hamburger-menu-link">
          <span class="hamburger-text indots-font-cabin-regular">Qué es indots</span>
        </a>
        <a data-attribute="" href="http://indots.getmore.mx/nuestros-cursos.html" class="hamburger-menu-link">
          <span class="hamburger-text indots-font-cabin-regular">Nuestros cursos</span
        </a>
        <a data-attribute="" href="http://indots.getmore.mx/flash-indots.html" class="hamburger-menu-link">
          <span class="hamburger-text indots-font-cabin-regular">Videos</span>
        </a>
        <a data-attribute="" href="http://indotsverde.com" class="hamburger-menu-link">
          <span class="hamburger-text indots-font-cabin-regular">Indots verde</span>
        </a>
        <a data-attribute="" href="http://blog.indots.getmore.mx/" class="hamburger-menu-link link-active-mobile">
          <span class="hamburger-text indots-font-cabin-regular">Blog</span>
        </a>
        <a data-attribute="" href="http://indots.getmore.mx/contacto.html" class="hamburger-menu-link">
          <span class="hamburger-text indots-font-cabin-regular">Contacto</span>
        </a>
      </div>
    </div>
  </nav>
    <div id="content" class="site-content">
        <?php if (get_header_image()) : ?>
            <div class="header-image">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <img src="<?php header_image(); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>"
                         height="<?php echo esc_attr(get_custom_header()->height); ?>" alt="">
                </a>
            </div><!-- .header-image -->
        <?php endif; // End header image check. ?>

<script type="text/javascript">
  function showMenu() {
    document.querySelector('#menuContainer').style.width = '85%';
    document.querySelector('#hamburgerMenu').style.display = 'none';
  }

  function hideMenu() {
    document.querySelector('#menuContainer').style.width = '0%';
    document.querySelector('#hamburgerMenu').style.display = 'inline';
  }

  window.addEventListener('click', function(e) {
    if (!e.target.dataset.hasOwnProperty('attribute')) {
      hideMenu();
    }
  });

  /*Events of touchstart to mobile version*/

  var showHamburger = document.querySelector('#hamburgerMenu');

  showHamburger.addEventListener('touchstart', function(e) {
    e.preventDefault();
    showMenu();
  });

  var hideHamburger = document.querySelector('#hideHamburger');

  hideHamburger.addEventListener('touchstart', function(e) {
    e.preventDefault();
    hideMenu();
  });

  /* Events of click to desktop version*/

  showHamburger.addEventListener('click', function(e) {
    e.preventDefault();
    showMenu();
  });

  hideHamburger.addEventListener('click', function(e) {
    e.preventDefault();
    hideMenu();
  });
</script>

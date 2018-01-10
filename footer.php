<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shoreditch
 */

?>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-noty/2.4.1/packaged/jquery.noty.packaged.min.js'></script>
</div><!-- #content -->

<footer class="blog-footer">
  <div class="footer-div">
    <div class="footer-left-column">
      <img src="<?php echo get_template_directory_uri() . '/img/logo/logo-full.png'?>" alt="Logo" class="footer-logo" />
      <div class="footer-copyright-info">
        Derechos reservados,<br>
        Indots 2017
      </div>
    </div>
    <hr class="footer-divider">
    <div class="footer-right-column">
      <div class="footer-section-links-container">
        <div class="footer-column-content">
          <a href="index.html" class="footer-link-anchor">
            <span class="footer-link indots-font-cabin-regular">INICIO</span>
          </a>
          <a href="que-es-indots.html" class="footer-link-anchor">
            <span class="footer-link indots-font-cabin-regular">QUÉ ES INDOTS</span>
          </a>
          <a href="nuestros-cursos.html" class="footer-link-anchor">
            <span class="footer-link indots-font-cabin-regular">NUESTROS CURSOS</span>
          </a>
          <a href="flash-indots.html" class="footer-link-anchor">
            <span class="footer-link indots-font-cabin-regular">VIDEOS</span>
          </a>
        </div>
        <div class="footer-column-content">
          <a href="http://indotsverde.com" class="footer-link-anchor">
            <span class="footer-link indots-font-cabin-regular">INDOTS VERDE</span>
          </a>
          <a href="http://blog.indots.getmore.mx/" class="footer-link-anchor">
            <span class="footer-link indots-font-cabin-regular" style="font-weight: bold; color: #735d72;">BLOG</span>
          </a>
          <a href="contacto.html" class="footer-link-anchor">
            <span class="footer-link indots-font-cabin-regular"">CONTACTO</span>
          </a>
          <a href="mailto:contacto@indts.com" class="footer-link-anchor">
            <span class="footer-email indots-font-cabin-regular">contacto@indots.com</span>
          </a>
        </div>
      </div>
      <div class="footer-icons-container">
        <a href="https://www.instagram.com/indotslatam/" class="footer-link-anchor" target="_blank">
          <img src="<?php echo get_template_directory_uri() . '/img/icons/instagram-logo.png' ?>" class="footer-social-network-icon">
        </a>
        <a href="https://www.facebook.com/InDotsLatam/" class="footer-link-anchor" target="_blank">
          <img src="<?php echo get_template_directory_uri() . '/img/icons/facebook-logo.png' ?>" class="footer-social-network-icon">
        </a>
        <a href="https://twitter.com/indotslatam" class="footer-link-anchor" target="_blank">
          <img src="<?php echo get_template_directory_uri() . '/img/icons/twitter-logo.png' ?>" class="footer-social-network-icon">
        </a>
      </div>
    </div>
  </div>
</footer>

</div><!-- #page -->
</body>
</html>

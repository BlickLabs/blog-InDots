<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Shoreditch
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">
    <p class="aside-newsletter-title indots-font-LibreBaskerville-regular">Suscríbete a nuestro Newsletter</p>
    <form class="form footer_form" onsubmit="sendNewsletterEmail(); return false;" id='getEmailByPerson'>
        <div class="input_text">
            <input required type="form_sub" class="form-control1 blog-newsletter-input indots-font-cabin-regular" id="correo"
                   placeholder="Correo electrónico">
        </div>
        <button class="indots-btn-base green indots-font-cabin-regular" type="submit" name="submit">Suscribirme</button>
    </form>
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->

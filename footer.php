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

<footer class="site-footer">
    <div class="row">
        <div class="col-sm-12 col-md-6 text-left">
            <div class="footer-indots-logo">
                <img src="<?php echo get_template_directory_uri() . '/img/icons/white-indots-logo.png' ?>"
                     alt="InDots"/>
            </div>
            <p class="footer-social-terms">
                © InDots, 2017.
                <br>
                Todos los derechos reservados
            </p>
            <p class="footer-join-principal">
                Síguenos en:
                <br class="showOn-mobil">
                <a href="" target='_blank' class="fa fa-instagram"></a>
                <a href="" target='_blank' class="fa fa-facebook-square"></a>
                <a href="" target='_blank' class="fa fa-twitter"></a>
            </p>
            <p class="footer-join-principal">
                Escríbenos a:
                <a href="mailto:contacto@indots.com" class="">contacto@indots.com</a>
            </p>
        </div>
        <div class="col-md-4 col-sm-12 ">
            <p class="footer-info center">
                Suscríbete a nuestro Newsletter
            </p>
            <form class="form footer_form" onsubmit="sendNewsletterEmail(); return false;" id='getEmailByPerson'>
                <div class="input_text">
                    <input required type="form_sub" class="form-control1" id="correo"
                           placeholder="Correo electrónico">
                </div>
                <button class="indots-button green" type="submit" name="submit">Suscribirme</button>
            </form>
        </div>
    </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri() . '/lib/js/jquery.min.js' ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/js/menu.js' ?>"></script>
<script src="<?php echo get_template_directory_uri() . '/js/newsletter.js' ?>"></script>
<div id="fb-root"></div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.7";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<script>
    function sendNewsletterEmail(params) {
        var myform, formElement;
        if (params) {
            myform = document.getElementById("getEmailByPersonRight");
            formElement = document.getElementById("newsLetterWordpress");
        } else {
            myform = document.getElementById("correo");
            formElement = document.getElementById("getEmailByPerson");
        }
        var fd = new FormData(myform);
        try {
            $.ajax({
                url: "http://integrations.blick.mx/indots/newsletter/",
                data: {email: myform.value},
                type: 'POST',
                success: function (result) {
                    // do something with the result
                    event.preventDefault();
                    if (result.status === "subscribed") {
                        formElement.reset();
                        noty({text: 'Listo, espera las últimas noticias'});
                    } else {
                        if (result.title === "Member Exists") {
                            noty({text: 'El correo ya existe, intenta con otro'});
                        } else {
                            noty({text: 'El correo no es válido, intenta con otro'});
                        }
                    }
                }
            });
        } catch (e) {
            noty({text: 'Sucedió un error, intentalo de nuevo más tarde'});
        }

    }
</script>
</body>
</html>

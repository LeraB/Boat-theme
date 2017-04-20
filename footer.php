<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Boat
 */

?>


	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
        <div class="footer_conteiner clearfix">

            <div class="footer-wid-block">
                <?php dynamic_sidebar( 'footer-block-one' ); ?></div>
            <div class="footer-wid-block">
                <?php dynamic_sidebar( 'footer-block-two' ); ?>
            </div>
            <div class="footer-wid-block">
                <h4 >SUBSCRIBE TO OUR NEWSLETTER</h4>
                <input class="search_field search_field_" type="text" width="30" height="20" placeholder="Your email adress">
                <input class="search_submit search_submit_" type="button" size="40" value="SUBSCRIBE">

                <!-- Begin MailChimp Signup Form -->
                <link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
                <style type="text/css">
                    #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; width:100%;}
                    /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                       We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                </style>
                <div id="mc_embed_signup">
                    <form action="//wptest.us15.list-manage.com/subscribe/post?u=03e1ba3fed07e97ea4acc654b&amp;id=435eb81597" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">

                            <input type="email" value="" name="EMAIL" class="email search_field search_field_" id="mce-EMAIL" placeholder="email address" required>
                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                            <div ><input type="text" class="search_field search_field_" name="b_03e1ba3fed07e97ea4acc654b_435eb81597" tabindex="-1" value=""></div>
                            <div class="clear"><input type="submit" class="search_submit search_submit_"   value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                        </div>
                    </form>
                </div>

                <!--End mc_embed_signup-->

                <ul class="social_button">
                    <li><a href="#"> <i id="facebook" class="fa fa-facebook" aria-hidden="true"></i></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"> <i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="footer-wid-block">
                <div class="footer-sml-block">
                    <?php dynamic_sidebar( 'footer-block-three' ); ?>
                </div>

            </div>
        </div>
		<!-- .site-info -->
	</footer>
<script>

    $(function(){
        $( "#acf-field-location" ).keyup(function() {
            $("#acf-field-location")
                .geocomplete()
                .bind("geocode:result", function(event, result){

                });

        });


    });
</script><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

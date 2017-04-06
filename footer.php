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

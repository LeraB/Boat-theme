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
        <div class="footer_conteiner">

            <div  >
                <h4>TOP LOCATIONS</h4>
                <ul>
                    <li><a href="#">Lorem ipsum dolor</a></li>
                    <li><a href="#">Sit amet consectetur</a></li>
                    <li><a href="#">Adipisicing elit</a></li>
                    <li><a href="#">Eiusmod tempor</a></li>
                    <li><a href="#">Incididunt ut labore</a></li>
                </ul></div>
            <div>
                <h4>FEATURED BOATS</h4>
                <ul>
                    <li><a href="#">Lorem ipsum dolor</a></li>
                    <li><a href="#">Sit amet consectetur</a></li>
                    <li><a href="#">Adipisicing elit</a></li>
                    <li><a href="#">Eiusmod tempor</a></li>
                </ul>
            </div>
            <div>
                <h4 >SUBSCRIBE TO OUR NEWSLETTER</h4>
                <input class="search_field search_field_" type="text" width="30" height="20" placeholder="Your email adress">
                <input class="search_submit search_submit_" type="button" size="40" value="SUBSCRIBE">
                <ul class="social_button">
                    <li><a href="#"> <i id="facebook" class="fa fa-facebook" aria-hidden="true"></i></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#"> <i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div>
                <h4>Contact us</h4>
                <ul>
                    <li><a href="#">Lorem ipsum dolor</a></li>
                    <li><a href="#">Sit amet consectetur</a></li>
                    <li><a href="#">Adipisicing elit</a></li>
                    <li><a href="#">Eiusmod tempor</a></li>
                    <li><a href="#">Incididunt ut labore dolore</a></li>
                </ul>
            </div>
        </div>
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'boat' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'boat' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'boat' ), 'boat', '<a href="https://automattic.com/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</html>

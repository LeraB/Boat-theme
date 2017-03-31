<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Boat
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

        </main><!-- #main -->
    </div><!-- #primary -->
    <main>
        <section  class=" my-container">
            <ul class="number_block">
                <li>
                    <div class=" numbers_border">
                       <?php dynamic_sidebar( 'destinations-statistic' ); ?>

                    </div>


                </li>
                <li>
                    <div class=" numbers_border" >
                        <?php dynamic_sidebar( 'cities-statistic' ); ?>
                    </div>
                </li>
                <li>
                    <div class=" numbers_border">
                        <?php dynamic_sidebar( 'boats-statistic' ); ?>
                    </div>
                </li>
                <li>
                    <div>
                        <?php dynamic_sidebar( 'sailors-statistic' ); ?>
                    </div>
                </li>
            </ul>
        </section>


        <section class = "my-container block_pictures">
            <h2>EXPLORE OUR TOP DESTINATIONS</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et </p>
            <div >

                <?php

                $args = array( 'post_type' => 'Product');


// The Query
$query1 = new WP_Query( $args );

if ( $query1->have_posts() ) {
    // The Loop
    while ( $query1->have_posts() ) {
        $query1->the_post();
        echo '<li>' . get_the_title() . '</li>';
    }

    /* Restore original Post Data
     * NB: Because we are using new WP_Query we aren't stomping on the
     * original $wp_query and it does not need to be reset with
     * wp_reset_query(). We just need to set the post data back up with
     * wp_reset_postdata().
     */
    wp_reset_postdata();
}

/* The 2nd Query (without global var) */
$query2 = new WP_Query( $args2 );

if ( $query2->have_posts() ) {
    // The 2nd Loop
    while ( $query2->have_posts() ) {
        $query2->the_post();
        echo '<li>' . get_the_title( $query2->post->ID ) . '</li>';
    }

    // Restore original Post Data
    wp_reset_postdata();
}

?>
                <ul>
                    <li>
                        <div class="img-relative">


                            <img src="images/1pictures.png" >
                            <a href="#" class="small-btn-two">730</a>
                            <img class="sailboat"  src="images/sailboat-kopia.png" >
                            <div  class="pictures_text_two">
                                Figueira da Foz
                                <span>Portugal</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="img-relative">
                            <a href="#" class="small-btn-two">621</a>
                            <a href="#">   <img class="img" src="images/2pictures.png">
                            </a>
                            <div  class="pictures_text">
                                Ibiza
                                <span>Spain</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="img-relative">
                            <a href="#" class="small-btn-two">543</a>
                            <a href="#">   <img class="img" src="images/3pictures.png" >
                            </a>
                            <div  class="pictures_text">
                                Palma de Mallorca
                                <span>Spain</span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="img-relative">
                            <a href="#" class="small-btn-two">495</a>
                            <a href="#"><img class="img" src="images/4pictures.png" ></a>
                            <div  class="pictures_text">
                                Portofino
                                <span>Italy</span>
                            </div>
                        </div>

                    </li>
                    <li>
                        <div class="img-relative">
                            <a href="#" class="small-btn-two">402</a>
                            <a href="#">   <img class="img" src="images/5pictures.png" ></a>
                            <div  class="pictures_text">
                                Port Hercules
                                <span>Monaco</span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="button_white" >
                    <input  type="button" value="EXPLORE MORE DESTINATIONS">

                </div>
            </div>
        </section>
        <section class="have_block ">
            <div class="my-container">
                <?php dynamic_sidebar( 'Section-4-text' ); ?>
                <style> .have_block{background-image: url(" <?php echo
    get_theme_mod( 'sk_home_top_background_image');?>")
                    ;} </style>
                <div class="button_red" >
                    <div class="btn_white btn_make " id="section-4-btn">
                        <?php wp_nav_menu( array('menu' => 'nav-section-4' )); ?></div>
                </div>
            </div>
        </section>


        <section class ="my-container block_pictures_two">
            <h2>FEATURED BOATS</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
            <div >
                <ul >
                    <li >
                        <div class="img-relative " >
                            <a href="#" class="small-btn">€580 / day </a>
                            <a href="#">   <img class="img" src="images/111.png" ></a>
                            <div class="pictures_text">
                                <div>
                                    Delphia 47
                                </div>

                                <div>
                                    <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Gdańsk, Poland </a>
                                    <i class="fa fa-users" aria-hidden="true"></i> 8 Berths
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="img-relative">
                            <a href="#" class="small-btn">€950 / day </a>
                            <a href="#">   <img class="img" src="images/222.png" ></a>
                            <div class="pictures_text">
                                <div>
                                    Sense 55
                                </div>

                                <div >
                                    <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Portofino, Italy</a>
                                    <i class="fa fa-users" aria-hidden="true"></i> 12 Berths
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="img-relative">
                            <a href="#" class="small-btn">€820 / day </a>
                            <a href="#">   <img class="img" src="images/333.png" ></a>
                            <div class="pictures_text">
                                <div>
                                    Crusier 51
                                </div>

                                <div >
                                    <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>Palma de Mallorca, Spain</a>
                                    <i class="fa fa-users" aria-hidden="true"></i>10 Berths </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="img-relative">
                            <a href="#" class="small-btn">€400 / day</a>
                            <a href="#">   <img class="img" src="images/444.png" ></a>
                            <div class="pictures_text">
                                <div>
                                    Crusier 41S
                                </div>

                                <div class="">
                                    <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Lisbon, Portugal</a>
                                    <i class="fa fa-users" aria-hidden="true"></i> 8 Berths
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="button_white">
                <input class="btn_white find_padding" type="button" value="LOAD MORE BOATS">

            </div>
        </section>

    </main>

<?php
get_footer();


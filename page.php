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

                $args = array(
                        'post_type' => 'destinations_product',
                        'posts_per_page' => 5 ,
                );


                        $the_query = new WP_Query( $args );

                            // The Loop
                            if ($the_query->have_posts() ){
                                echo '<ul>';

                                   while ($the_query->have_posts()) :
                                       $the_query-> the_post();

                                       echo '<li >';
                                       echo ' <div class="img-relative">';
                                       ?>

                                           <a class="sailboat" href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
                                           <a class="small-btn-two" href="#">  <?php the_field( 'count_of_destination' ) ?></a>
                                           <div class="pictures_text">
                                           <?php the_field( 'destination_name' ) ?>
                                           <span>
                                              <?php   the_field( 'location_of_destination_' )?>
                                           </span>
                                           </div>

                                           <?php
                                           '</div>';
                                           '</li>';
                                   endwhile;
                                echo '</ul>';
                                    wp_reset_postdata();
                                } else {
                                    echo '<p>no posts found</p>' ;
                                }

                        ?>
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
                             get_theme_mod( 'sk_home_top_background_image');?>")    ;} </style>
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

                <?php
                $args = array(
                    'post_type' => 'boats_product',
                    'posts_per_page' => 4 ,
                );
               $the_query = new WP_Query( $args );

                if ($the_query->have_posts() ){
                    echo '<ul>';

                    while ($the_query->have_posts()) :
                        $the_query-> the_post();

                        echo '<li >';
                        echo ' <div class="img-relative">';
                        ?>
                        <a class="img" href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
                        <a class="small-btn" href="#">€ <?php the_field( 'boat_cost' ); ?> / <?php the_field( '_rental_period' ); ?></a>
                        <div class="pictures_text">
                            <div>
                                <?php the_field( 'name_of_boat' ) ?>
                            </div>
                            <div>
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <?php the_field( 'location' )  ?>

                                <i class="fa fa-users" aria-hidden="true"></i>
                                <?php the_field( 'count_of_berths' ) ?>
                                Berths
                            </div>
                        </div>

                        <?php
                        '</div>';
                        '</li>';
                    endwhile;
                    echo '</ul>';
                    wp_reset_postdata();
                } else {
                    echo '<p>no posts found</p>' ;
                }

                ?>

            <div class="button_white">
                <input class="btn_white find_padding" type="button" value="LOAD MORE BOATS">

            </div>
        </section>

    </main>

<?php
get_footer();


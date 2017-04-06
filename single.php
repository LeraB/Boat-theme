<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Boat
 */

get_header(); ?>


    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">


            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post(); ?>
                    <div class="my-container text-center">
                        <h2>    <?php the_title(); ?></h2>
                        <?php the_content(); ?>

                    </div>
                    <?php
                    $slides = $dynamic_featured_image->get_featured_images();
                    ?>

                    <div class="slick-slider">
                    <?php
                    foreach ($slides as $keynomerlist) {
                        ?>
                        <div class="slide">
                            <img src="<?php echo $keynomerlist["full"];?>">
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                    <?php
                }
            } else echo 'Записей нет'; // End of the loop.
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<?php

get_footer();

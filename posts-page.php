<?php
/**
 * The template for displaying all posts
 *

 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Boat
 */

get_header(); ?>

<main xmlns="http://www.w3.org/1999/html">
<div>

    <?php
    $args = array(
        'post_type' => 'boats_product',
    );
    $the_query = new WP_Query($args);

    if ($the_query->have_posts()) {


        while ($the_query->have_posts()) :
            $the_query->the_post();
      ?>



                <div class="img-relative">
                    <a class="img" href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
                    <a class="small-btn" href="#">€ <?php the_field('boat_cost'); ?>
                        / <?php the_field('_rental_period'); ?></a>
                    <div class="pictures_text">
                        <div>
                            <?php the_field('name_of_boat') ?>
                        </div>
                        <div>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <?php the_field('location') ?>

                            <i class="fa fa-users" aria-hidden="true"></i>
                            <?php the_field('count_of_berths') ?>
                            Berths
                        </div>
                    </div>
                </div>
            </div>
            <?php


        endwhile;

        wp_reset_postdata();
    } else {
        echo '<p> no posts found</p>';
    }

    ?>



</div>
</main>

<?php

get_footer();

<?php
/**
 * Template Name: all boat
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


    <section class="my-container block_pictures" id="blog-ajax-container">

        <h2>
            All boat
        </h2>
        <div class="grid" id="allboat">
            <?php
            $args = array(
                'post_type' => 'boats_product',
                'posts_per_page' => 3,
            );
            $the_query = new WP_Query($args);

            if ($the_query->have_posts()) {

                while ($the_query->have_posts()) :
                    $the_query->the_post();

                    $value = get_field('wide_picture');

                    $css_class = '';
                    $css_size = 'grid-sizer';
                    if (is_array($value) && ($value[0] == true)) {
                        $css_class = 'grid-item-wide';
                        $css_size = '';

                    } ?>

                    <div class="grid-item <?php echo $css_class; ?> ">
                        <div class="img-relative">
                            <a class="img" href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
                            <a class="small-btn" href="#">€ <?php the_field('boat_cost'); ?>
                                <?php the_field('_rental_period'); ?></a>
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
                echo '<p>no posts found</p>';
            }
            ?>
        </div>

        <div class="button_white" id="blog_true_loadmore">
            <a href=" " class="btn_white find_padding" type="button" action="blog_load"> MORE DESTINATIONS </a>
        </div>

    </section>

    <script>
        var blog_current_page = '<?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>';
        var blog_max_pages = '<?php echo $the_query->max_num_pages; ?>';

    </script>

    <script>
        var blog_true_posts = '<?php echo serialize($the_query->query_vars); ?>';
        var postt = 'boat';

    </script>
<?php
get_footer();


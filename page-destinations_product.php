<?php
/**
 * Template Name: all product
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



<section class="my-container block_pictures">

    <h2>
        All destinition
    </h2>
    <div class="grid">
        <?php
        $args = array(
            'post_type' => 'destinations_product',
            'posts_per_page' => 5,
        );
        $the_query = new WP_Query($args);

        if ($the_query->have_posts()) {

            while ($the_query->have_posts()) :
                $the_query->the_post();

                $value =  get_field('wide_picture');

                $css_class = '';
                $css_size = 'grid-sizer';
                if(is_array($value) && ($value[0] == true)) {
                    $css_class = 'grid-item-wide';
                    $css_size = '';

                }  ?>

                <div class="grid-item <?php echo $css_class; ?> ">
                    <div class="img-relative">
                        <a class="sailboat "
                           href="<?php the_permalink() ?>"><?php the_post_thumbnail() ?></a>
                        <a class="small-btn-two"
                           href="#">  <?php the_field('count_of_destination') ?></a>
                        <div class="pictures_text">
                            <?php the_field('destination_name') ?>
                            <span>
                                <?php the_field('location_of_destination_') ?>
                                </span>
                        </div>
                    </div>

                </div>


                <?php

            endwhile;

            wp_reset_postdata();
        }else {
            echo '<p>no posts found</p>';
        }
        ?>
    </div>

    <div class="button_white" id="blog_true_loadmore">
        <a href=" " class="btn_white find_padding"  type="button"> MORE DESTINATIONS </a>
    </div>
    <script>
        var blog_current_page = '<?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>';
        var blog_max_pages = '<?php echo $the_query->max_num_pages; ?>';

    </script>

    <script>
        var blog_true_posts = '<?php echo serialize($the_query->query_vars); ?>';

    </script>

</section>
<?php

get_footer();

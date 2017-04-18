<?php

function blog_load_feature()
{

    $args = unserialize(stripslashes($_POST['query']));
    $args['paged'] = $_POST['page'] + 1;

    $blog_query = new WP_Query($args);


    while ($blog_query->have_posts()) :
        $blog_query->the_post();


        $value = get_field('wide_picture');

        $css_class = '';
        $css_size = 'grid-sizer';
        if (is_array($value) && ($value[0] == true)) {
            $css_class = 'grid-item-wide';
        } ?>

<!--            <div class="grid-item <?php echo $css_class; ?> ">
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
--!>
        <?php
        $item = '<div class="grid-item ' . $css_class . '">
         <div class="img-relative">
                    <a class="img" href=" ' . the_permalink() .'">  '. the_post_thumbnail() .'</a>
                    <a class="small-btn" href="#">€ '. the_field('boat_cost'). ' ' . the_field('_rental_period') . ' </a>
                    <div class="pictures_text">
                        <div>
                         ' . the_field('name_of_boat'). '
                        </div>
                        <div>
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                           ' . the_field('location') .'

                            <i class="fa fa-users" aria-hidden="true"></i>
                           ' . the_field('count_of_berths').'
                            Berths
                        </div>
                    </div>
                </div>
            </div>

        ';
        $items[] = $item;
        ?>
    <?php endwhile;
    die();

}
add_action('wp_ajax_blog_load', 'blog_load_feature');
add_action('wp_ajax_nopriv_blog_load', 'blog_load_feature');

?>
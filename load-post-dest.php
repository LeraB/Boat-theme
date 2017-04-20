<?php

function blog_load_dist()
{
    $items = array();

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


        <?php
        $item = ' <div class="grid-item ' . $css_class . ' ">';
        $item .= '     <div class="img-relative">';
        $item .= '               <a class="sailboat "  href="'. the_permalink() .' ">'.the_post_thumbnail()  .'</a>';
        $item .= '  <a class="small-btn-two" href="#">  '. get_field('count_of_destination').'</a>';
        $item .= ' <div class="pictures_text"> ' . get_field('destination_name') . '';
        $item .= ' <span> ' . get_field('location_of_destination_') . '</span>';
        $item .= ' </div>  </div>  </div>';
        // $item['html'] = $css_class;

        $items[] = $item;

        ?>
    <?php endwhile;
    echo json_encode($items);
    die();

}

add_action('wp_ajax_blog_load', 'blog_load_dist');
add_action('wp_ajax_nopriv_blog_load', 'blog_load_dist');

?>
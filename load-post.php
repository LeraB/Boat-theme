<?php

function blog_load_feature()
{

    $items = array();
    $postty = $_POST['post_type'];

    $args = unserialize(stripslashes($_POST['query']));
    //var_dump($args);

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

        // $item['html'] = $css_class;
        $item = ' <div class=" grid-item">';
        $item .= ' <div class="img-relative">';
        $item .= '  <a class="img" href=" ' . get_the_permalink() . '">  ' . get_the_post_thumbnail() . '</a>';
    //    var_dump($postty);
        if ($postty == 'boat') {

            $item .= '  <a class="small-btn" href="#">€ ' . get_field('boat_cost') . ' ' . get_field('_rental_period') . ' </a>';
            $item .= ' <div class="pictures_text">';
            $item .= ' <div>  ' . get_field('name_of_boat') . '  </div>';
            $item .= ' <div> <i class="fa fa-map-marker" aria-hidden="true"></i>';
            $item .= get_field('location');
            $item .= '   <i class="fa fa-users" aria-hidden="true"></i>';
            $item .= get_field('count_of_berths') . ' Berths </div>  ';

        }else{
            $item .= '  <a class="small-btn-two" href="#">  '. get_field('count_of_destination').'</a>';
            $item .= ' <div class="pictures_text"> ' . get_field('destination_name') . '';
            $item .= ' <span> ' . get_field('location_of_destination_') . '</span>';
        }


        $item .= '  </div>  </div> </div> ';


        $items[] = $item;

        ?>
    <?php endwhile;
    echo json_encode($items);
    die();

}

add_action('wp_ajax_blog_load', 'blog_load_feature');
add_action('wp_ajax_nopriv_blog_load', 'blog_load_feature');

?>
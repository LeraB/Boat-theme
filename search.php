<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Boat
 */

get_header();

?>

    <section id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
<div class="my-container seasch-form">

                <?php
                if (have_posts()) : ?>

                    <h1 class="page-title  "><?php printf(esc_html__('Search results for: %s', 'boat'), '<span>' . get_search_query() . '</span>'); ?></h1>

                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<a  href="<?php the_permalink(); ?>">

                       <div class="find-block">
                          <h2> <a  href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h2>
                            <?php the_content(''); ?>
                        </div>

</a>
                    <?php endwhile;
                    else: ?>
                        <p>Поиск не дал результатов.</p>
                    <?php endif;
                endif; ?>
            </div>
        </main><!-- #main -->
    </section><!-- #primary -->

<?php
get_footer();


<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Boat
 */

get_header(); ?>

    <section id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <form role="search" method="get" id="searchform" action="<?php echo home_url('/') ?>">
                <input class="search_field form_location" type="text" value="<?php echo get_search_query() ?>"
                       placeholder="WHAT IS YOUR DESTINATION,SAILOR?" name="s" id="s">
                <input class="search_submit_two" type="submit" id="searchsubmit" value="FIND A BOAT">
            </form>


            <?php
            if (have_posts()) : ?>

                <header class="page-header">
                </header><!-- .page-header -->
                <h1 class="page-title"><?php printf(esc_html__('Search Results for: %s', 'boat'), '<span>' . get_search_query() . '</span>'); ?></h1>

                h1>Поиск по: "<?php echo $_GET['s']; ?>"</h1>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <?php the_content(''); ?>
                <?php endwhile;
                else: ?>
                    <p>Поиск не дал результатов.</p>
                <?php endif;
            endif; ?>

        </main><!-- #main -->-->
    </section><!-- #primary -->-->

<?php
get_footer();


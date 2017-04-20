<?php
/**
 * Template Name: all boat xacascx
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

    <div id="primary" class="content-area my-container">
        <main id="main" class="site-main" role="main">
            <h2>
                <?php wp_title(); ?>
            </h2>

            <div class="small-container">
                <input class="sing_in_form " type="text" placeholder="Your name">
                <input class="sing_in_form " type="text" placeholder="Your second name">
                <input class="sing_in_form " type="text" placeholder="Your email adress">


            </div>
        </main><!-- #main -->
    </div><!-- #primary -->


<?php

get_footer();

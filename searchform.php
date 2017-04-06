<?php
/**
 * The template for displaying search form
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Boat
 */

get_header(); ?>

<section id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <form role="search" method="get" id="searchform" action="<?php echo home_url('/' ) ?>" >
            <input class="search_field form_location" type="text"  placeholder="WHAT IS YOUR DESTINATION,SAILOR?" name="s" id="s">
            <input class="search_submit_two" type="button" value="FIND A BOAT">
        </form>

        </main>
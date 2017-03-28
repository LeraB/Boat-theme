<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <header id="masthead" class="site-header" role="banner">
        <div class="site-branding">
            <div class="log">

            </div>
        </div>
    <nav  id="site-navigation" class="main-navigation clearfix" role="navigation">

        <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
    </nav>
    <div class="header_text">
        <h1>Reserve your boat now</h1>
        <h2>And set your sails into paradise!</h2>
    </div>
    <form action="#" >
        <input class="search_field form_location" type="text" name="request" placeholder="WHAT IS YOUR DESTINATION,SAILOR?">
        <input class="search_submit_two" type="button" value="FIND A BOAT">
    </form>

</header>

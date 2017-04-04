<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyAZDkoDBNBQdFTvMIRoWC451q_V1gBKvYM&sensor=false&amp;libraries=places"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

    <script src="/jquery.geocomplete.min.js"></script>
    <script>


    </script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <header id="masthead" class="site-header" role="banner">


         <nav  id="site-navigation" class="main-navigation clearfix" role="navigation">
             <div class="log">
             <?php  the_custom_logo();   ?>
             </div>
        <?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
    </nav>


<div class="header_text">
        <h1><?php bloginfo('name')?></h1>
        <h2><?php bloginfo('description')?></h2>
</div>
<form action="#" >
    <input class="search_field form_location" type="text" name="request" placeholder="WHAT IS YOUR DESTINATION,SAILOR?">
    <input class="search_submit_two" type="button" value="FIND A BOAT">
</form>




</header>

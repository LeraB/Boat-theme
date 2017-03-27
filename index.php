<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Boat
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">


            <main>
                <section  class=" my-container">
                    <ul class="number_block">
                        <li>
                            <div class=" numbers_border">
                                <div class="numbers">2,300</div>
                                <div class="numbers_text">Destinations</div>
                            </div>


                        </li>
                        <li>
                            <div class=" numbers_border" >
                                <div class="numbers">1,000</div>
                                <div class="numbers_text" >Cities</div>
                            </div>
                        </li>
                        <li>
                            <div class=" numbers_border">
                                <div class="numbers">35,000</div>
                                <div class="numbers_text">Boats</div>
                            </div>
                        </li>
                        <li>
                            <div>
                                <div class="numbers">50,000</div>
                                <div class="numbers_text">Sailors</div>
                            </div>
                        </li>
                    </ul>
                </section>


                <section class = "my-container block_pictures">
                    <h2>EXPLORE OUR TOP DESTINATIONS</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et </p>
                    <div >
                        <ul>
                            <li>
                                <div class="img-relative">
                                    <img src="images/1pictures.png" >
                                    <a href="#" class="small-btn-two">730</a>
                                    <img class="sailboat"  src="images/sailboat-kopia.png" >
                                    <div  class="pictures_text_two">
                                        Figueira da Foz
                                        <span>Portugal</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-relative">
                                    <a href="#" class="small-btn-two">621</a>
                                    <a href="#">   <img class="img" src="images/2pictures.png">
                                    </a>
                                    <div  class="pictures_text">
                                        Ibiza
                                        <span>Spain</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-relative">
                                    <a href="#" class="small-btn-two">543</a>
                                    <a href="#">   <img class="img" src="images/3pictures.png" >
                                    </a>
                                    <div  class="pictures_text">
                                        Palma de Mallorca
                                        <span>Spain</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-relative">
                                    <a href="#" class="small-btn-two">495</a>
                                    <a href="#"><img class="img" src="images/4pictures.png" ></a>
                                    <div  class="pictures_text">
                                        Portofino
                                        <span>Italy</span>
                                    </div>
                                </div>

                            </li>
                            <li>
                                <div class="img-relative">
                                    <a href="#" class="small-btn-two">402</a>
                                    <a href="#">   <img class="img" src="images/5pictures.png" ></a>
                                    <div  class="pictures_text">
                                        Port Hercules
                                        <span>Monaco</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="button_white" >
                            <input  type="button" value="EXPLORE MORE DESTINATIONS">

                        </div>
                    </div>
                </section>
                <section class="have_block ">
                    <div class="my-container">
                        <h1>HAVE YOUR OWN BOAT?</h1>
                        <p>NAVIGARE NECESSE EST, VIVERE NON EST NECESSE</p>

                        <div class="button_red" >
                            <input type="button" class="btn_white btn_make " value="MAKE MONEY WITH YOUR BOAT">
                        </div>
                    </div>
                </section>


                <section class ="my-container block_pictures_two">
                    <h2>FEATURED BOATS</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                    <div >
                        <ul >
                            <li >
                                <div class="img-relative " >
                                    <a href="#" class="small-btn">€580 / day </a>
                                    <a href="#">   <img class="img" src="images/111.png" ></a>
                                    <div class="pictures_text">
                                        <div>
                                            Delphia 47
                                        </div>

                                        <div>
                                            <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Gdańsk, Poland </a>
                                            <i class="fa fa-users" aria-hidden="true"></i> 8 Berths
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-relative">
                                    <a href="#" class="small-btn">€950 / day </a>
                                    <a href="#">   <img class="img" src="images/222.png" ></a>
                                    <div class="pictures_text">
                                        <div>
                                            Sense 55
                                        </div>

                                        <div >
                                            <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Portofino, Italy</a>
                                            <i class="fa fa-users" aria-hidden="true"></i> 12 Berths
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-relative">
                                    <a href="#" class="small-btn">€820 / day </a>
                                    <a href="#">   <img class="img" src="images/333.png" ></a>
                                    <div class="pictures_text">
                                        <div>
                                            Crusier 51
                                        </div>

                                        <div >
                                            <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>Palma de Mallorca, Spain</a>
                                            <i class="fa fa-users" aria-hidden="true"></i>10 Berths </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-relative">
                                    <a href="#" class="small-btn">€400 / day</a>
                                    <a href="#">   <img class="img" src="images/444.png" ></a>
                                    <div class="pictures_text">
                                        <div>
                                            Crusier 41S
                                        </div>

                                        <div class="">
                                            <a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Lisbon, Portugal</a>
                                            <i class="fa fa-users" aria-hidden="true"></i> 8 Berths
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="button_white">
                        <input class="btn_white find_padding" type="button" value="LOAD MORE BOATS">

                    </div>
                </section>

            </main>
            <?php
            if ( have_posts() ) :

                if ( is_home() && ! is_front_page() ) : ?>
                    <header>
                        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                    </header>

                    <?php
                endif;

                /* Start the Loop */
                while ( have_posts() ) : the_post();

                    /*
                     * Include the Post-Format-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                     */
                    get_template_part( 'template-parts/content', get_post_format() );

                endwhile;

                the_posts_navigation();

            else :

                get_template_part( 'template-parts/content', 'none' );

            endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_sidebar();
get_footer();

<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package dazzling
 */

error_reporting( E_ALL | E_NOTICE );
ini_set( 'display_errors', true );

get_header(); ?>
        <div id="primary" class="content-area col-sm-12 col-md-12">
            <?php masterslider(3); ?>
                <main id="main" class="site-main" role="main">
                    <div class="pres-index">
                    <h1>Bienvenue au coeur de l'E-sport</h1>
                    <p>Bienvenue sur le site de l’IIM consacrée intégralement à l’e-sport sur League of Legends. L’IIM est une des premières écoles à créer un département dédié à l’e-sport dans ses locaux afin de développer et augmenter la notoriété de l’e-sport « universitaire ». Les joueurs sélectionnés pour représenter l’école ont été choisis à la suite de différente épreuves et entretiens, pour qu’ils répondent au mieux l’attente des coachs et de l’école.</p>
                    <h1>Les différents événements à venir:</h1>
                    </div>
                    <div class="col-md-6 col-xs-12 tournois">
                        <img class="img-responsive" src="<?php bloginfo('url'); ?>/wp-content/themes/dazzling/img/img1.jpg">
                        <h2>Tournoi de qualification pour le tournoi ESL 2017.</h2>
                    </div>
                    <div class="col-md-6 col-xs-12 photo">
                        <img class="img-responsive" src="<?php bloginfo('url'); ?>/wp-content/themes/dazzling/img/img1.jpg">
                        <h2>Shooting photos de l’equipe et des équipements informatiques.</h2>
                    </div>
                    <div class="col-md-6 col-xs-12 interview">
                        <img class="img-responsive" src="<?php bloginfo('url'); ?>/wp-content/themes/dazzling/img/img1.jpg">
                        <h2>Interview à venir sur le twitch de millenium et sur la TF1.</h2>
                    </div>
                    <div class="col-md-6 col-xs-12 championnat">
                        <img class="img-responsive" src="<?php bloginfo('url'); ?>/wp-content/themes/dazzling/img/img1.jpg">
                        <h2>Tournoi qualificatif pour les championnats du monde de 2017.</h2>
                    </div>

                    <?php

                    $wp = query_posts(array(
                        'post_type'	=> 'news',
                        'meta_key' => 'position',
                        'meta_value' => 'left'
                    ));
                    echo '<div class="col-md-6 coll">';
                    if(have_posts()) : while(have_posts()) : the_post();
                    echo '<div class="hovereffect1 imgmargin">';
                    ?><a href="<?php the_permalink() ?>"><?php
                        echo '<h2 class="captionmos">'; the_title();echo '</h2>';
                        echo '<img src="'; echo get('image'); echo '" class="img-responsive" >';
                        echo '<div class="overlay1"></div>';
                        echo '</a>';
                        echo '</div>';
                        echo '</div>';





                        endwhile; endif;
                        ?>



                    <?php

                    $wp = query_posts(array(
                        'post_type'	=> 'news',
                        'meta_key' => 'position',
                        'meta_value' => 'right'
                    ));
                    echo '<div class="col-md-6 colr">';
                    if(have_posts()) : while(have_posts()) : the_post();
                    echo '<div class="hovereffect1 imgmargin">';
                    ?><a href="<?php the_permalink() ?>"><?php
                        echo '<h2 class="captionmos">'; the_title();echo '</h2>';
                        echo '<img src="'; echo get('image'); echo '" class="img-responsive" >';
                        echo '<div class="overlay1"></div>';
                        echo '</a>';
                        echo '</div>';





                        endwhile; endif;
                        ?>


                </div>
                <div class="col-md-12 col-xs-12">
                    <h1>Nos Sponsors et Partenaires</h1>
                    <div class="container">
                    
                    <div class="row" style="display: inline-block;">
                        <a href="#" style="display: inline-block;"><img class="img-responsive" width="150" src="<?php bloginfo('url'); ?>/wp-content/themes/dazzling/img/milenium.png"></a>
                        <a href="#" style="display: inline-block;"><img class="img-responsive" width="150" src="<?php bloginfo('url'); ?>/wp-content/themes/dazzling/img/razer.png"></a>
                        <a href="#" style="display: inline-block;"><img class="img-responsive" width="150" src="<?php bloginfo('url'); ?>/wp-content/themes/dazzling/img/redbull.png"></a>
                        <a href="#" style="display: inline-block;"><img class="img-responsive" width="150" src="<?php bloginfo('url'); ?>/wp-content/themes/dazzling/img/steel.png"></a>
                        <a href="#" style="display: inline-block;"><img class="img-responsive" width="150" src="<?php bloginfo('url'); ?>/wp-content/themes/dazzling/img/twitch.png"></a>
                    </div>
                    </div>
                </div>
                </main><!-- #main -->
        </div><!-- #primary -->

<?php get_footer(); ?>
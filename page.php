<?php get_header(); ?>
        <div class="container">
            
            <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
            ?>

            <h2 class="my-post-title">
                <?php the_title(); ?>
            </h2>

            <?php
                    the_content();
                endwhile;
            endif;
            ?>
        </div>
        
 <?php get_footer(); ?>   
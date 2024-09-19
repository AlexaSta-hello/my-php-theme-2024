<?php get_header(); ?>
        <div class="container">

            <article class="my-post-content">
            
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

            </article>

            <aside class="post-sidebar">
                <?php dynamic_sidebar ('side-widgets'); ?>
            </aside>

        </div>
        
 <?php get_footer(); ?>   
<?php get_header(); ?>

<div class="container my-blog-template">
    
    <!-- Ein Loop, zum Anzeigen der Beiträge auf Startseite-->
    <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
    ?>

        <!-- Ein Beitrag -->
        <article>

            <!-- Titel -->    
            <h2 class="my-post-title">
                <?php the_title(); ?>
            </h2>

            <!-- Beitragsbild-->
            <figure class="my-post-thumbnail">
                <?php the_post_thumbnail(); ?>
            </figure>

            <!-- Inhalt. 
                ! Wird hier nicht ganz angezeigt, da ich im WP-Backend
                 einen more-Block im Beitrag eingefügt habe. "more" 
                 erstellt automatisch neue Unterseite zum Inhalt mit Link-->
            <?php the_content();?>

        </article>

    <?php    
        endwhile;
        endif;
    ?>
</div>
        
 <?php get_footer(); ?>   
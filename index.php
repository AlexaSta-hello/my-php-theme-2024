<?php get_header(); ?>

<div class="container my-blog-template">
    
    <!-- Ein Loop, zum Anzeigen der Beiträge auf Startseite-->
    <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
    ?>

        <!-- Ein Beitrag the_post()-->
        <article>

            <!-- Titel -->    
            <h2 class="my-post-title">
                <?php the_title(); ?>
                <!-- statt "more" in WP könnne wir auch mit the_permalink arbeiten-->
                <a href="<?php the_permalink(); ?>">permalink</a>
                <!--kombiniert wäre das-->
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h2>

            <!-- Beitragsbild-->
            <figure class="my-post-thumbnail">
                <?php the_post_thumbnail(); ?>
            </figure>

            <!-- Inhalt. 
                ! Wird hier nicht ganz angezeigt, da ich im WP-Backend
                 einen more-Block im Beitrag eingefügt habe. "more" 
                 erstellt automatisch neue Unterseite zum Inhalt mit Link-->
            <!-- Will ich den ganzen Content the_content() oder nur einen Textauszug -> the_excerpt? 
            Textauszug ist hInterlegt in WP-Backend unter einzelnem Beitrag-->
            <?php the_excerpt();?>
            <a href="<?php the_permalink(); ?>">zum Beitrag ...</a>
                <?php /* the_content();*/?> <!-- und dann mir "more" arbeiten ->

        </article>

    <?php    
        endwhile;
        endif;
    ?>
</div>
        
 <?php get_footer(); ?>   
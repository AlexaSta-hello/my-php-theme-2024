<!-- Ich lege ein eigenes template an. wir müssen ncoh etwas tun, 
 damit wir es in WP überhaupt auswählen können, da es nicht den WP-Template Namen hat.
 Besonderheit von WP: Es lkann Kommentare lesen... siehe unten-->


<?php 
/*
Template Name: Canvas Footer
Template Post Type: post, page
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>  <?php bloginfo('title'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <p>Custom Template Canvas mit Footer</p>
        <div class="wrapper main-wrapper">

        <main>
            
            <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                    the_content();
                endwhile;
            endif;
            ?>
        
        
 <?php get_footer(); ?>   
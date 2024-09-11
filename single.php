<!DOCTYPE html>
<html>

<head>
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head() ?>
</head>

<body>
<p>Dies ist das Beitrags Template</p>
    <h1><?php bloginfo('title'); ?></h1>

    <?php
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
    ?>

    <h2 class="my-post-title"><?php the_title(); ?></h2>

    <?php
        the_content();
    endwhile;
endif;
?>


    <?php wp_footer() ?>
</body>

</html>
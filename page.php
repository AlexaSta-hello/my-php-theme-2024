<!DOCTYPE html>
<html>

<head>
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head() ?>
</head>

<body>
    <header>
        <div class="container">
            <p>Dies ist das Page Template</p>
            <h1><?php bloginfo('title'); ?></h1>

            <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
        </div>
    </header>

    <main>
        <div class="container">
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
        </div>
    </main>

    <footer>
        <div class="container">
                       <?php wp_nav_menu( array( 'theme_location' => 'secondary-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
            <p>© 2024 Enno Hyttrek</p>
        </div>
    </footer>
    <?php wp_footer() ?>
</body>

</html>
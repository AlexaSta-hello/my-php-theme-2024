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

            <nav class="nav-bar main-nav">
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            </div>
            </nav>
            
    </header>

    <main>
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
    </main>

    <footer>
        <div class="container">
            <nav class="nav-bar footer-nav">
            <?php wp_nav_menu( 
                        array( 'theme_location' => 'secondary-menu') ); ?>
            </nav>
                       
            <p>© 2024 Enno Hyttrek</p>
        </div>
    </footer>
    <?php wp_footer() ?>
</body>

</html>
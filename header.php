<!DOCTYPE html>
<html>

<head>
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head() ?>
</head>

<body>
    <header>
        <div class="container">
            
            <h1><?php bloginfo('title'); ?></h1>

            <nav class="nav-bar main-nav">
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            </div>
            </nav>
            
    </header>

    <main>
        
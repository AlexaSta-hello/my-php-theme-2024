<!DOCTYPE html>
<html>

<head>
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <div class="wrapper main-wrapper">
    <header>
        <div class="container">
            
            <h1><?php bloginfo('title'); ?></h1>

            <aside class="header-sidebar">
                <?php dynamic_sidebar ('header-widgets'); ?>
            </aside>

            </div>   
            
    </header>
<!-- ausserhalb von header falls wir es später sticy wollen-->
    <nav class="nav-bar main-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            
    </nav>

    <main>
        
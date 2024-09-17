
    </main>

    <footer>
        <div class="container">
            <aside class="footer-sidebar">
                <?php dynamic_sidebar ('footer-widgets'); ?>
            </aside>

            <nav class="nav-bar footer-nav">
            <?php wp_nav_menu( 
                        array( 'theme_location' => 'secondary-menu') ); ?>
            </nav>
                       
            <p>© 2024 Enno Hyttrek</p>
        </div>
    </footer>
    </div> <!-- .main-wrapper -->
    <?php wp_footer() ?>
</body>

</html>
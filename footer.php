<div class="background">
    <footer class="site-footer">
        <div class="arrow-up">
            <a href="#content"><img src="/wp-content/themes/manfron/assets/images/up-arrow.png" alt="top"></a>
        </div>
        <?php
            if( is_active_sidebar( 'social' ) ){
                dynamic_sidebar( 'social' );
            }
        ?>
        <div class="container">
            <?php get_template_part( 'parts/content', 'copyright' ); ?>
            <nav class="footer-menu">
                <?php get_template_part( 'parts/content', 'footer-menu' ); ?>
            </nav>
        </div>
    </footer>
    <?php wp_footer(); ?>
</div>
</body>
</html>
<?php get_template_part( 'parts/content', 'page-home-header' ); ?>
    <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="background">
                        <?php

                            get_template_part( 'parts/content', 'hero' ); // Load Hero
                            get_template_part( 'parts/content', 'aboutme' ); // Load About me

                        ?>
                    </div><!-- #End Background Custom the site -->
                    <?php

                        get_template_part( 'parts/content', 'services' ); // Load Services
                        get_template_part( 'parts/content', 'projects' ); // Load Projects
                        get_template_part( 'parts/content', 'skills' ); // Load Skills
                        get_template_part( 'parts/content', 'home-blog' ); // Load Home Blog
                        get_template_part( 'parts/content', 'contact' ); // Load Contact

                    ?>
                </main>
            </div>
        </div>
<?php get_footer(); ?>
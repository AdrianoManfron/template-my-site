<?php
/*
Template Name: General Template
*/
?>
<?php get_header(); ?>
    <div class="header-image">
        <?php get_template_part( 'parts/content', 'header-image' ); ?>
    </div>
       <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="container">
                        <div class="general-template">
                            <?php
                            if( have_posts() ):
                                while( have_posts() ) : the_post();
                                ?>
                                    <article>
                                        <h1><?php the_title(); ?></h1>
                                        <?php the_content(); ?>
                                    </article>
                                <?php
                                endwhile;
                            else:
                                get_template_part( 'parts/content', 'not-posts' );
                            endif; ?><!-- #Loop the Posts -->
                        </div>
                    </div>
                </main>
            </div>
        </div>
<?php get_footer(); ?>
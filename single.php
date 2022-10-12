<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div class="container">
            <?php
            while( have_posts() ) :
                the_post();

                get_template_part( 'parts/content', 'single-post' );
            ?>
            <div class="manfron-pagination">
                <div class="pages next">
                    <?php next_post_link( '&laquo; %link' ); ?>
                </div>
                <div class="pages previous">
                    <?php previous_post_link( '%link &raquo;' ); ?>
                </div>
            </div><!-- #Pagination the Posts -->
            <?php
                if( comments_open() || get_comments_number() ){
                    comments_template();
                }
            endwhile;
            ?><!-- #Enable comments in the posts -->

        </div>
    </div>
</div>

<?php get_footer(); ?>
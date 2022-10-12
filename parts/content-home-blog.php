<div class="background">
    <section class="home-blog">
        <h2><?php esc_html_e( 'Latest News', 'manfron' ); ?><span>( )</span></h2>
        <div class="container">
            <?php

                $per_page = get_theme_mod( 'set_per_page', 3 );
                $category_include = get_theme_mod( 'set_category_include' );

                $args = array(
                    'post_type' =>  'post',
                    'posts_per_page' =>  esc_html( $per_page ),
                    'category__in'  =>  explode( ",", esc_html( $category_include ) )
                );

                $postlist = new WP_Query( $args );

                if( $postlist->have_posts() ):
                    while( $postlist->have_posts() ) : $postlist->the_post();
                        get_template_part( 'parts/content', 'latest-news' );
                    endwhile; 
                wp_reset_postdata();
            else:
                get_template_part( 'parts/content', 'not-posts' );
            endif; ?>
        </div>
    </section><!-- #Blog the site -->
</div><!-- #End Background Custom the site -->
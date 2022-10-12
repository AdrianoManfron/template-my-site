<article class="latest-news">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <div class="meta-info">
        <p>
            <?php esc_html_e( 'by', 'manfron' ); ?> <span><?php the_author_posts_link(); ?></span>
            <?php esc_html_e( 'Categories', 'manfron' ); ?>: <span><?php the_category( ' ' ); ?></span>
            <?php esc_html_e( 'Tags', 'manfron' ); ?>: <span><?php the_tags( '', ', ' ); ?></span>
        </p>
        <p><span><?php echo esc_html( get_the_date() ); ?></span></p>
    </div>
    <p><?php the_excerpt(); ?></p>
</article><!-- #Loop the Posts -->
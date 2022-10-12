<article id="post-<?php the_ID();?>" <?php post_class(); ?>>
    <header>
        <h1><?php the_title(); ?></h1>
        <div class="meta-info">
            <p><?php esc_html_e( 'Posted in', 'manfron' ); ?> <?php echo esc_html( get_the_date() ); ?> <?php esc_html_e( 'by', 'manfron' ); ?> <?php the_author_posts_link(); ?></p>
            <p><?php esc_html_e( 'Categories:', 'manfron' ); ?> <?php the_category( ' ' ); ?></p>
            <p><?php esc_html_e( 'Tags:', 'manfron' ); ?> <?php the_tags( '', ', ' ); ?></p>
        </div>
    </header><!-- #Infos the Posts -->
        <div class="content">
            <?php the_content(); ?>
         </div>
</article>
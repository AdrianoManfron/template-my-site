<div class="logo">
    <?php
        if( has_custom_logo() ){
            the_custom_logo(); 
        }else{
    ?>
        <a href="<?php echo esc_html( home_url( '/' ) ); ?>"><span><?php bloginfo( 'name' ); ?></span></a>
    <?php
        }   
    ?><!-- #Site title or logo -->
</div><!-- #Header Titles -->
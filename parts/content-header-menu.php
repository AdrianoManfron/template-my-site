<button class="check-button">
    <div class="menu-icon">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>
</button><!-- #Mobile Nav Menu Button -->
<?php wp_nav_menu( array( 'theme_location' => 'manfron_main_menu', 'depth' => 2 ) ); ?>
<div class="social-menu">
    <?php
        if( is_active_sidebar( 'social-menu' ) ){
            dynamic_sidebar( 'social-menu' );
        }
    ?> 
</div>
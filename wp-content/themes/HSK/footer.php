            <div class="clear"></div>
        </div><!-- /#main -->
    </div><!-- /#wrapper -->
    
    <div class="wrapper_footersidebar">
        <div id='footersidebar'>
            <?php get_sidebar('footer'); ?>
        </div>
    </div>
    <div class="wrapper_footer">
        <div id='footer'>  
            <div id='footermenu'>
                <?php wp_nav_menu(array('menu_class' => 'nav_footer', 'theme_location' => 'footer_menu', 'depth' => '1', 'fallback_cb' => false)); ?>
            </div>
            <p align="right">
            &copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?>. Wordpress-tema av Tomas Lycken.
            </p>
       </div>
    </div>
<?php wp_footer(); ?>

</body>
</html>

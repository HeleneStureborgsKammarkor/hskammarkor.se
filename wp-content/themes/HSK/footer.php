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
				<ul id="menu-login-meny" class="nav_footer">
					<?php if (is_user_logged_in()): ?>
					<li id="menu-item-1" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-96">
						<a href="http://hskammarkor.se/internsidorna/">Internsidorna</a>
					</li>
					<?php if (current_user_can('manage_options')): ?>
					<li id="menu-item-2" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-62">
						<a href="http://hskammarkor.se/wp-admin">Admin</a>
					</li>
					<?php endif; ?>
					<li id="menu-item-3" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-229">
						<a href="http://hskammarkor.se/wp-login.php?action=logout">Logga ut</a>
					</li>
					<?php else: ?>
					<li id="menu-item-229" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-229">
						<a href="http://hskammarkor.se/wp-login.php?redirect_to=http%3A%2F%2Fhskammarkor.se%2Finternsidorna">Logga in</a>
					</li>
					<?php endif; ?>
				</ul>
            </div>
            <p align="right">
            &copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?>. Wordpress-tema av Tomas Lycken.
            </p>
       </div>
    </div>
<?php wp_footer(); ?>

</body>
</html>

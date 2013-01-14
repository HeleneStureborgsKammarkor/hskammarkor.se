<div id="sidebar" <?php if(cpotheme_get_option('cpo_sidebar_position') == 'left') echo 'class="left"'; ?>>

<?php $feature_posts = new WP_Query('post_type=cpo_portfolio&posts_per_page=2&order=DESC&orderby=date'); ?>

<?php if(sizeof($feature_posts) > 0): $feature_count = 0; ?>
<div id="showcase">
    <div class="work">
		
		<?php while($feature_posts->have_posts()): $feature_posts->the_post(); ?>
        <?php $feature_count++; ?>
        
        <a href="<?php the_permalink(); ?>" class="item">
            <div class="thumbnail">
				<?php the_post_thumbnail(); ?>
                <div class="content">
                    <?php the_excerpt(); ?>
                </div>
            </div>
            <div class="title">
            	<h3><?php the_title(); ?></h3>
            </div>
        </a>
        
        <?php endwhile; ?>
    </div>
    <div class='clear'></div>
</div>
<?php endif; ?>

</div>

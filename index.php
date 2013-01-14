<?php get_header(); ?>
    
<div id="content">
	<?php $home_posts = cpotheme_get_option('cpo_home_limit');
	if($home_posts == '' || !is_numeric($home_posts)) $home_posts = 5;
	query_posts('cat=-6&amp;posts_per_page='.$home_posts); $post_count = 0; ?>
	<?php while(have_posts()): the_post(); ?>
	<div class="preview"> 
        <div class="meta">
            <div class="thumbnail"><?php the_post_thumbnail(array(300, 800)); ?></div>
            <div class="date"><?php the_date(); ?></div>                
            <div class="tags"><?php cpotheme_post_tags(); ?></div>
            <div class="comments"><?php if(get_comments_number() == 1) _e('One Comment', 'cpotheme'); else printf(__('%1$s Comments', 'cpotheme'), number_format_i18n(get_comments_number())); ?></div>
        </div>
        <h3 class="title">
            <a href="<?php the_permalink(); ?>" title="<?php printf(esc_attr__('Permalink to %s', 'cpotheme'), the_title_attribute('echo=0')); ?>" rel="bookmark"><?php the_title(); ?></a>
        </h3>
        <!--<div class="byline"><?php cpotheme_post_shortbyline(); ?></div>-->
        <div class="content"><?php the_content(); ?></div>
	</div>
	<?php endwhile; ?>
</div>
 
<?php get_sidebar('home'); ?>

<?php get_footer(); ?>

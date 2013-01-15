<?php get_header(); ?>

<div id="content" class="wide">

	<?php if(have_posts()) while(have_posts()) : the_post(); ?>
	<div id="portfolio-<?php the_ID(); ?>" class="portfolio" <?php post_class(); ?>>
		<h1 class="title"><?php the_title(); ?></h1>		

		
		<?php if (class_exists('MultiPostThumbnails') && MultiPostThumbnails::has_post_thumbnail(get_post_type(), 'portfolio-slide-image-0')): ?>
		
			<div id="slider">
				<div class="prev"></div>
				<div class="next"></div>
				<div class="pages"></div>
				
				<ul class="slider_container">
					<?php
					$i = 0;
					while(MultiPostThumbnails::has_post_thumbnail(get_post_type(), 'portfolio-slide-image-' . $i)):
						$url = MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'portfolio-slide-image-' . $i);
					?>
					<li id="slider_slide_<?php echo ++$i ?>" style="background:url(<?php echo $url;	?>) no-repeat #fff center;"></li>
					<? endwhile; ?>
				</ul>
        	</div>
        	
        <?php endif; ?>
			
		<div class="utility"><?php cpotheme_post_tags(); ?></div>
		<div class="clear"></div>
	</div>
	<?php endwhile ?>

</div>

<?php get_footer(); ?>

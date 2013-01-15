<?php get_header(); ?>

<div id="content" class="wide">

	<?php if(have_posts()) while(have_posts()) : the_post(); ?>
	<div id="post-<?php the_ID(); ?>" class="portfolio" <?php post_class(); ?>>
		<h1 class="title"><?php the_title(); ?></h1>		
			
			<ul>
			<?php    
			if (has_post_thumbnail()) { // checks if post has a featured image and then outputs it.    
				$image_id = get_post_thumbnail_id ($post->ID );  
				$image_thumb_url = wp_get_attachment_image_src( $image_id,'small-thumb');                               
				echo '<li>' . $image_thumb_url[0] . '</li>';
			}
			if (class_exists('MultiPostThumbnails')) {                              
			$i=1;
            while ($i<=5) {
                $image_name = 'feature-image-'.$i;  // sets image name as feature-image-1, feature-image-2 etc.
                if (MultiPostThumbnails::has_post_thumbnail('cpo_portfolio', $image_name)) { 
                    $image_id = MultiPostThumbnails::get_post_thumbnail_id( 'cpo_portfolio', $image_name, $post->ID );  // use the MultiPostThumbnails to get the image ID
                    $image_thumb_url = wp_get_attachment_image_src( $image_id,'small-thumb');  // define thumb src based on image ID
                    $image_feature_url = wp_get_attachment_image_src( $image_id,'feature-image' ); // define full size src based on image ID
                    $attr = array(
                        'class' => "folio-sample",      // set custom class
                        'rel' => $image_thumb_url[0],   // sets the url for the image thumbnails size
                        'src' => $image_feature_url[0], // sets the url for the full image size 
                    );                                                                                      
                    // Use wp_get_attachment_image instead of standard MultiPostThumbnails to be able to tweak attributes
                    $image = wp_get_attachment_image( $image_id, 'feature-image', false, $attr );                     
                    echo $image;
                }                           
                $i++;
            }                                     
        }; // end if MultiPostThumbnails ?>
			</ul>
			
		<div class="utility"><?php cpotheme_post_tags(); ?></div>
		<div class="clear"></div>
	</div>
	<?php endwhile ?>

</div>

<?php get_footer(); ?>

<?php

if (class_exists('MultiPostThumbnails')) {
	for ($i = 0; $i < 10; $i++) {
		new MultiPostThumbnails(
			array(
				'label' => 'Albumbild ' . ($i+1),
				'id' => 'portfolio-slide-image-' . $i,
				'post_type' => 'cpo_portfolio'
			)
		);
	}

}

add_image_size('portfolio-slide', 600, 400);

			
?>

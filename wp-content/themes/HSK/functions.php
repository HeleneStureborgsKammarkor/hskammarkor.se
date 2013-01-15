<?php

if (class_exists('MultiPostThumbnails')) {
	new MultiPostThumbnails(
		array(
			'label' => __('Featured Image') . ' 2',
			'id' => 'secondary-image',
			'post_type' => 'cpo_portfolio'
		)
	);
}
			
?>

<?php
// ThumbNails
	add_theme_support( 'post-thumbnails' );

	if (function_exists('add_image_size')){
		add_image_size('post-thumb', 220, 220);
		add_image_size('banner-thumb', 1400, 540, true);
	}

<?php
// Create arguments for get_posts function for retrieve specific posts
$videos_args	=	
	array(
		'post_per_page'		=>	-1,
		'orderby'			=>	'date',
		'order'				=>	'DESC',
		'post_type'			=>	'videos',
		'post_status'		=>	'publish',
		'suppress_filters'	=>	true,
	);
	/*
	 * @function get_posts Retrieves an array of the latest posts, or posts matching the given criteria.
	 * get_posts( array $args = null )
	 * @arguments $videos_args 
	*/
	$post_display_videos_loop	=	get_posts( $videos_args );

	foreach( $post_display_videos_loop as $post_display_video ):
		$post_title	=	$rows->post_title;
	endforeach;

	// Show title
	echo $post_title;
	
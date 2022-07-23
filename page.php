<?php
$videos_args	=	
	array(
		'post_per_page'		=>	-1,
		'orderby'			=>	'date',
		'order'				=>	'DESC',
		'post_type'			=>	'videos',
		'post_status'		=>	'publish',
		'suppress_filters'	=>	true,
	);

	$post_display_videos_loop	=	get_posts( $videos_args );

	foreach( $post_display_videos_loop as $post_display_video ):
		$post_title	=	$rows->post_title;
	endforeach;

	// Show title
	echo $post_title;
	
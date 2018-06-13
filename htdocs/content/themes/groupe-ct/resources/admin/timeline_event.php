<?php

PostType::make('timeline_event', __('Timeline Events', 'GROUPE-CT'), __('Timeline Event', 'GROUPE-CT') )->set([
	'menu_icon' => 'dashicons-calendar-alt',
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true,
	'exclude_from_search' => true,
	'show_in_nav_menus' => false,
	'has_archive' => false,
	'rewrite' => [
		'slug' => 'timeline'
	],
	'supports' => ['title', 'editor']
]);
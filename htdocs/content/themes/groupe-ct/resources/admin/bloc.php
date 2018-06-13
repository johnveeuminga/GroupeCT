<?php

PostType::make('bloc', __('Blocks', 'GROUPE-CT'), __('Block', 'GROUPE-CT') )->set([
	'menu_icon' => 'dashicons-tagcloud',
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'exclude_from_search' => true,
    'show_in_nav_menus' => false,
    'has_archive' => false,
    'rewrite' => [
	    'slug' => 'blocs'
    ],
    'supports' => ['title'],
]);


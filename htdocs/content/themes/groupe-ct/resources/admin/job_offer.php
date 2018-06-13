<?php

PostType::make('job_offer', __('Job Offers', 'GROUPE-CT'), __('Job Offer', 'GROUPE-CT') )->set([
	'menu_icon' => 'dashicons-businessman',
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true,
	'exclude_from_search' => true,
	'show_in_nav_menus' => false,
	'has_archive' => false,
	'rewrite' => [
		'slug' => 'jobs'
	],
	'supports' => ['title', 'editor']
]);

$acf_fields = new BaseLego();

acf_add_local_field_group(array (
	'key' => 'job_field_group',
	'title' => 'Job Details',
	'fields' => array (
		$acf_fields->generate_text('job_offer_office', __('Office', 'GROUPE-CT') ),
		$acf_fields->generate_text('job_offer_location', __('Work Location', 'GROUPE-CT') ),
		$acf_fields->generate_text('job_offer_dept', __('Department', 'GROUPE-CT') ),
		$acf_fields->generate_text('job_offer_deadline', __('Deadline', 'GROUPE-CT') ),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'job_offer',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));
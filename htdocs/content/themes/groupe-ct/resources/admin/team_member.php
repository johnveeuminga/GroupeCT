<?php

PostType::make('team_member', __('Team Members', 'GROUPE-CT'), __('Team Member', 'GROUPE-CT') )->set([
	'menu_icon' => 'dashicons-groups',
	'public' => true,
	'publicly_queryable' => true,
	'show_ui' => true,
	'exclude_from_search' => true,
	'show_in_nav_menus' => false,
	'has_archive' => false,
	'rewrite' => [
		'slug' => 'team-members'
	],
	'supports' => ['title', 'thumbnail']
]);

$acf_fields = new BaseLego();

acf_add_local_field_group(array (
	'key' => 'team_member_field_group',
	'title' => 'Team Member Details',
	'fields' => array (
		$acf_fields->generate_text('team_member_title', __('Title', 'GROUPE-CT') ),
		$acf_fields->generate_text('team_member_phone', __('Phone Number', 'GROUPE-CT') ),
		$acf_fields->generate_text('team_member_position', __('Extension', 'GROUPE-CT') ),
		$acf_fields->generate_text('team_member_email', __('Email', 'GROUPE-CT') ),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'team_member',
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
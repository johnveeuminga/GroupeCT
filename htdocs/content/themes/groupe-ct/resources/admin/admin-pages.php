<?php

/**
 *
 * CONTACT US
 *
 **/

$page = Page::make('info', 'Contact us')->set([
	'icon' => 'dashicons-edit'
]);

$sections[] = Section::make('contact', 'Contact');
$settings['contact'] = [
	Field::text('phoneMtl' ,['title' => 'Phone Number : Montreal']),
	Field::text('phoneQc' ,['title' => 'Phone Number : Quebec']),
];

/* SECTION SERVICES  */
$sections[] = Section::make('socialMedia', 'Social Media');
$settings['socialMedia'] = [

	Field::text('linkedin',['title' => 'LinkedIn']),
	Field::text('facebook',['title' => 'Facebook']),
];

$sections[] = Section::make('hr', 'Human Resources');
$settings['hr'] = [
	Field::text('hrEmail',['title' => 'HR Email']),
];

$page->addSettings($settings);
$page->addSections($sections);


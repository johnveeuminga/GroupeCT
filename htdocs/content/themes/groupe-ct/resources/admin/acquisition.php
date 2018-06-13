<?php

PostType::make('acquisition', __('Acquisitions', 'GROUPE-CT'), __('Acquisition', 'GROUPE-CT') )->set([
    'menu_icon' => 'dashicons-networking',
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'exclude_from_search' => true,
    'show_in_nav_menus' => false,
    'has_archive' => false,
    'rewrite' => [
        'slug' => 'acquisitions'
    ],
    'supports' => ['title', 'thumbnail']
]);

$acf_fields = new BaseLego();

acf_add_local_field_group(array (
    'key' => 'acquisition_field_group',
    'title' => 'Acquisition',
    'fields' => array (
        $acf_fields->generate_image('acquisition_image_desktop', __('Image Desktop', 'GROUPE-CT'), __('Minimum Width : 1920px | Minimum Height : 670px', 'GROUPE-CT') ),
        $acf_fields->generate_image('acquisition_image_mobile', __('Image Mobile', 'GROUPE-CT'), __('Minimum Width : 415px | Minimum Height : 735px', 'GROUPE-CT') ),
        $acf_fields->generate_text('acquisition_title', __('Titre', 'GROUPE-CT') ),
        $acf_fields->generate_textarea('acquisition_description', __('Description', 'GROUPE-CT') ),
        $acf_fields->generate_text('acquisition_domain', __('Domaine', 'GROUPE-CT') ),
        $acf_fields->generate_text('acquisition_custom_hash', __('Custom Hash', 'GROUPE-CT') ),
        $acf_fields->generate_tab('acquisition_1', 'CTA #1'),
        $acf_fields->generate_cta('acquisition_1' )[0],
        $acf_fields->generate_cta('acquisition_1' )[1],
        $acf_fields->generate_cta('acquisition_1' )[2],
        $acf_fields->generate_tab('acquisition_2', 'CTA #2'),
        $acf_fields->generate_cta('acquisition_2' )[0],
        $acf_fields->generate_cta('acquisition_2' )[1],
        $acf_fields->generate_cta('acquisition_2' )[2],
    ),
    'location' => array (
        array (
            array (
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'acquisition',
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

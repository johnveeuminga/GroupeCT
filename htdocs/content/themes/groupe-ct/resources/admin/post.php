<?php

$acf_fields = new BaseLego();

acf_add_local_field_group(array (
    'key' => 'post_field_group',
    'title' => 'Post Details',
    'fields' => array (
        $acf_fields->generate_true_false('post_show_date', __('Show Date', GROUPE_CT)),
        $acf_fields->generate_true_false('post_is_featured', __('Is featured?', GROUPE_CT)),
        $acf_fields->generate_image('post_featured_image', __('Featured image', GROUPE_CT), __('Minimum Width : 585px | Minimum Height : 590px', 'GROUPE-CT')),
        $acf_fields->generate_image('post_standard_image', __('Standard image', GROUPE_CT), __('Minimum Width : 585px | Minimum Height : 360px', 'GROUPE-CT')),
    ),
    'location' => array (
        array (
            array (
                'param' => 'post_type',
                'operator' => '==',
                'value' => 'post',
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

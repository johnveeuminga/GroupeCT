<?php

/**
 * Created by PhpStorm.
 * User: michael
 * Date: 20/05/17
 * Time: 6:09 PM
 */
class BaseLego
{
	public function generate_cta($prefix, $conditional_logic = 0)
    {
        return [
            [
                'key' => $prefix . '_cta_label_key',
                'label' => 'CTA Label',
                'name' => $prefix . '_cta_label',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => $conditional_logic,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ],
            [
                'key' => $prefix . '_cta_link_key',
                'label' => 'CTA Link',
                'name' => $prefix . '_cta_link',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => $conditional_logic,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
            ],
            [
                'key' => $prefix . '_cta_blank_key',
                'label' => 'CTA open in new tab',
                'name' => $prefix . '_cta_blank',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => $conditional_logic,
                'wrapper' => array (
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'message' => '',
                'default_value' => 0,
                'ui' => 0,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ]
        ];
    }

	public function generate_tab($prefix, $tab_name)
    {
        return [
            'key' => $prefix . '_tab_key',
            'label' => $tab_name,
            'name' => $prefix . '_tab_1',
            'type' => 'tab',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ];
    }

    public function generate_text($prefix, $label, $conditional_logic = 0)
    {
        return [
            'key' => $prefix . '_key',
            'label' => $label,
            'name' => $prefix,
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => $conditional_logic,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ];
    }

    public function generate_textarea($prefix, $label, $conditional_logic = 0, $required = 0)
    {
        return [
            'key' => $prefix . '_key',
            'label' => $label,
            'name' => $prefix,
            'type' => 'textarea',
            'instructions' => '',
            'required' => $required,
            'conditional_logic' => $conditional_logic,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ];
    }

	public function generate_wysiwyg($prefix, $label)
    {
        return [
            'key' => $prefix . '_key',
            'label' => $label,
            'name' => $prefix,
            'type' => 'wysiwyg',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ];
    }

	public function generate_true_false($prefix, $label)
    {
        return [
            'key' => $prefix . '_key',
            'label' => $label,
            'name' => $prefix,
            'type' => 'true_false',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ];
    }

	public function generate_image($prefix, $label, $size_instruction, $conditional_logic = 0, $required = 0)
    {
        return [
            'key' => $prefix . '_key',
            'label' => $label,
            'name' => $prefix,
            'type' => 'image',
            'instructions' => $size_instruction,
            'required' => $required,
            'conditional_logic' => $conditional_logic,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ];
    }

	public function generate_color_picker($prefix, $label)
    {
        return [
            'key' => $prefix . '_key',
            'label' => $label,
            'name' => $prefix,
            'type' => 'color_picker',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ];
    }

	public function generate_number($prefix, $label)
    {
        return [
            'key' => $prefix . '_key',
            'label' => $label,
            'name' => $prefix,
            'type' => 'number',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array (
                'width' => '',
                'class' => '',
                'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
        ];
    }

	/**
	 * @param $prefix
	 * @param $label
	 * @param array $fields
	 * @param int $min
	 * @param int $max
	 * @param int|array $conditional_logic
	 *
	 * @return array
	 */
	public function generate_repeater($prefix, $label, $fields = [], $min = 1, $max = 0, $conditional_logic = 0)
    {
    	return [
		    'key' => $prefix . '_key',
		    'label' => $label,
		    'name' => $prefix,
		    'type' => 'repeater',
		    'instructions' => '',
		    'required' => 0,
		    'conditional_logic' => $conditional_logic,
		    'wrapper' => array (
			    'width' => '',
			    'class' => '',
			    'id' => '',
		    ),
		    'collapsed' => '',
		    'min' => $min,
		    'max' => $max,
		    'layout' => 'block',
		    'button_label' => '',
		    'sub_fields' => $fields
	    ];
    }


	public function generate_select($prefix, $label, $choices = [])
    {
    	return [
		    'key' => $prefix . '_key',
		    'label' => $label,
		    'name' => $prefix,
		    'type' => 'select',
		    'instructions' => '',
		    'required' => 0,
		    'conditional_logic' => 0,
		    'wrapper' => array (
			    'width' => '',
			    'class' => '',
			    'id' => '',
		    ),
		    'choices' => $choices,
		    'default_value' => [],
		    'allow_null' => 0,
		    'multiple' => 0,
		    'ui' => 0,
		    'ajax' => 0,
		    'return_format' => 'value',
		    'placeholder' => '',
	    ];
    }

	public function generate_object($prefix, $label, $post_types = [])
    {
	    return [
		    'key' => $prefix . '_key' ,
		    'label' => $label,
		    'name' => $prefix,
		    'type' => 'post_object',
		    'instructions' => '',
		    'required' => 0,
		    'conditional_logic' => 0,
		    'wrapper' => array (
			    'width' => '',
			    'class' => '',
			    'id' => '',
		    ),
		    'post_type' => $post_types,
		    'taxonomy' => array (
		    ),
		    'allow_null' => 0,
		    'multiple' => 0,
		    'return_format' => 'object',
		    'ui' => 1,
        ];
    }


	public function generate_url($prefix, $label)
	{
		return [
			'key' => $prefix . '_key',
			'label' => $label,
			'name' => $prefix,
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		];
	}


	public function generate_file($prefix, $label, $mimetype = '')
	{
		return [
			'key' => $prefix . '_key',
			'label' => $label,
			'name' => $prefix,
			'type' => 'file',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'return_format' => 'array',
			'library' => 'uploadedTo',
			'min_size' => '',
			'max_size' => '',
			'mime_types' => $mimetype,
		];

	}


	public function generate_datepicker($prefix, $label)
	{
		return [
			'key' => $prefix . '_key',
			'label' => $label,
			'name' => $prefix,
			'type' => 'date_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'Y-m-d',
			'return_format' => 'Y-m-d',
			'first_day' => 1
		];

	}



}
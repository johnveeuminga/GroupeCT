<?php

/**
 * Class Lego2
 * Text/Image & Image/Text - Slider
 */
class Lego2 extends BaseLego implements LegoInterface
{
    public function get_unique_fields()
    {
        return [
	        $this->generate_repeater('bloc_2_slide',           __('Testimonial', 'GROUPE-CT'), [
                $this->generate_text('bloc_2_slide_subheader', __('Subheader', 'GROUPE-CT') ),
                $this->generate_text('bloc_2_slide_title',             __('Title', 'GROUPE-CT') ),
                $this->generate_text('bloc_2_slide_subtitle',          __('Subtitle', 'GROUPE-CT') ),
                $this->generate_textarea('bloc_2_slide_text',          __('Text', 'GROUPE-CT') ),
                $this->generate_cta('bloc_2_slide' )[0],
                $this->generate_cta('bloc_2_slide' )[1],
                $this->generate_cta('bloc_2_slide' )[2],
                $this->generate_true_false('bloc_2_slide_cta_open_contact', __('CTA open contact form', 'GROUPE-CT')),
                $this->generate_text('bloc_2_slide_phone_1_location',  __('Phone 1 - Location', 'GROUPE-CT') ),
                $this->generate_text('bloc_2_slide_phone_1_label',     __('Phone 1 - Label', 'GROUPE-CT') ),
                $this->generate_text('bloc_2_slide_phone_1',           __('Phone 1', 'GROUPE-CT') ),
                $this->generate_text('bloc_2_slide_phone_2_location',  __('Phone 2 - Location', 'GROUPE-CT') ),
                $this->generate_text('bloc_2_slide_phone_2_label',     __('Phone 2 - Label', 'GROUPE-CT') ),
                $this->generate_text('bloc_2_slide_phone_2',           __('Phone 2', 'GROUPE-CT') ),
                $this->generate_image('bloc_2_slide_image',            __('Image', 'GROUPE-CT'), __('Minimum Width : 580px | Minimum Height : 580px', 'GROUPE-CT') ),
                $this->generate_true_false( 'bloc_2_slide_image_left', __('Image on the left?', 'GROUPE-CT') ),
            ])
        ];
    }

    public function get_fields_layout()
    {
        return [

            'key' => 'bloc_2_key',
            'name' => 'bloc_2',
            'label' => __('Bloc 2 - Text/Image - Slider', 'GROUPE-CT'),
            'display' => 'block',
            'sub_fields' => $this->get_unique_fields(),
            'min' => '',
            'max' => '',
        ];
    }
}
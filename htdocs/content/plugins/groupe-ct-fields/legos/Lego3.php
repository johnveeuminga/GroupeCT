<?php

/**
 * Class Lego3
 * Text/Image & Image/Text - Standalone
 */
class Lego3 extends BaseLego implements LegoInterface
{
    private function get_unique_fields()
    {
        return [
            $this->generate_text('bloc_3_subheader', __('Subheader', 'GROUPE-CT') ),
            $this->generate_text('bloc_3_title',             __('Title', 'GROUPE-CT') ),
	        $this->generate_text('bloc_3_subtitle',          __('Subtitle', 'GROUPE-CT') ),
	        $this->generate_textarea('bloc_3_text',          __('Text', 'GROUPE-CT') ),
	        $this->generate_cta('bloc_3' )[0],
	        $this->generate_cta('bloc_3' )[1],
	        $this->generate_cta('bloc_3' )[2],
	        $this->generate_true_false('bloc_3_cta_open_contact', __('CTA open contact form', 'GROUPE-CT')),
	        $this->generate_text('bloc_3_phone_1_location',  __('Phone 1 - Location', 'GROUPE-CT') ),
	        $this->generate_text('bloc_3_phone_1_label',     __('Phone 1 - Label', 'GROUPE-CT') ),
	        $this->generate_text('bloc_3_phone_1',           __('Phone 1', 'GROUPE-CT') ),
	        $this->generate_text('bloc_3_phone_2_location',  __('Phone 2 - Location', 'GROUPE-CT') ),
	        $this->generate_text('bloc_3_phone_2_label',     __('Phone 2 - Label', 'GROUPE-CT') ),
	        $this->generate_text('bloc_3_phone_2',           __('Phone 2', 'GROUPE-CT') ),
	        $this->generate_image('bloc_3_image',            __('Image', 'GROUPE-CT'), __('Minimum Width : 580px | Minimum Height : 580px', 'GROUPE-CT') ),
	        $this->generate_true_false( 'bloc_3_image_left', __('Image on the left?', 'GROUPE-CT') ),
        ];
    }

    public function get_fields_layout()
    {
        return [
            'key' => 'bloc_3_key',
            'name' => 'bloc_3',
            'label' => __('Bloc 3 - Text/Image - Standalone', 'GROUPE-CT'),
            'display' => 'block',
            'sub_fields' => $this->get_unique_fields(),
            'min' => '',
            'max' => '',
        ];
    }
}
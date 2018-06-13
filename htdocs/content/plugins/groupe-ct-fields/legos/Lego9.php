<?php

/**
 * Class Lego9
 * Statistics
 */
class Lego9 extends BaseLego implements LegoInterface
{
    public function get_unique_fields()
    {
        return [
            $this->generate_text('bloc_9_title', 'Title'),
	        $this->generate_tab('bloc_9_1',                    __('Icon 1', 'GROUPE-CT') ),
            $this->generate_text('bloc_9_1_label',             __('Label', 'GROUPE-CT') ),
            $this->generate_color_picker('bloc_9_1_primary',   __('Primary Color', 'GROUPE-CT') ),
            $this->generate_color_picker('bloc_9_1_unfilled',  __('Unfilled color', 'GROUPE-CT') ),
            $this->generate_number('bloc_9_1_percentage',      __('Percentage filled', 'GROUPE-CT') ),
            $this->generate_textarea('bloc_9_1_description',   __('Description', 'GROUPE-CT') ),
            $this->generate_text('bloc_9_1_source',            __('Source', 'GROUPE-CT') ),
            $this->generate_image('bloc_9_1_image',            __('Image', 'GROUPE-CT'), __('Minimum Width : 580px | Minimum Height : 580px', 'GROUPE-CT') ),
	        $this->generate_tab('bloc_9_2',                    __('Icon 2', 'GROUPE-CT') ),
	        $this->generate_text('bloc_9_2_label',             __('Label', 'GROUPE-CT') ),
	        $this->generate_color_picker('bloc_9_2_primary',   __('Primary Color', 'GROUPE-CT') ),
	        $this->generate_color_picker('bloc_9_2_unfilled',  __('Unfilled color', 'GROUPE-CT') ),
	        $this->generate_number('bloc_9_2_percentage',      __('Percentage filled', 'GROUPE-CT') ),
	        $this->generate_textarea('bloc_9_2_description',   __('Description', 'GROUPE-CT') ),
	        $this->generate_text('bloc_9_2_source',            __('Source', 'GROUPE-CT') ),
            $this->generate_image('bloc_9_2_image',            __('Image', 'GROUPE-CT'), __('Minimum Width : 580px | Minimum Height : 580px', 'GROUPE-CT') ),
        ];
    }

    public function get_fields_layout()
    {
        return [

            'key' => 'bloc_9_key',
            'name' => 'bloc_9',
            'label' => 'Bloc 9 - Statistics',
            'display' => 'block',
            'sub_fields' => $this->get_unique_fields(),
            'min' => '',
            'max' => '',
        ];
    }
}
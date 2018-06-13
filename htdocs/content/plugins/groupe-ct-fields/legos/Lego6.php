<?php

/**
 * Class Lego6
 * 3-columns with icons
 */
class Lego6 extends BaseLego implements LegoInterface
{
    public function get_unique_fields()
    {
        return [
            $this->generate_tab('bloc_6_1',                __('Icon 1', 'GROUPE-CT') ),
            $this->generate_image('bloc_6_1_icon',         __('Icon', 'GROUPE-CT'), __('Width 125px | Height 125px', 'GROUPE-CT') ),
            $this->generate_text('bloc_6_1_title',         __('Title', 'GROUPE-CT') ),
            $this->generate_textarea('bloc_6_1_description', 'Description'),
            $this->generate_cta('bloc_6_1')[0],
            $this->generate_cta('bloc_6_1')[1],
            $this->generate_cta('bloc_6_1')[2],
            $this->generate_tab('bloc_6_2', 'Icon 2'),
            $this->generate_image('bloc_6_2_icon',          __('Icon', 'GROUPE-CT'), __('Width 125px | Height 125px', 'GROUPE-CT') ),
            $this->generate_text('bloc_6_2_title', 'Title'),
            $this->generate_textarea('bloc_6_2_description', 'Description'),
            $this->generate_cta('bloc_6_2')[0],
            $this->generate_cta('bloc_6_2')[1],
            $this->generate_cta('bloc_6_2')[2],
            $this->generate_tab('bloc_6_3', 'Icon 3'),
            $this->generate_image('bloc_6_3_icon',           __('Icon', 'GROUPE-CT'), __('Width 125px | Height 125px', 'GROUPE-CT') ),
            $this->generate_text('bloc_6_3_title', 'Title'),
            $this->generate_textarea('bloc_6_3_description', 'Description'),
            $this->generate_cta('bloc_6_3')[0],
            $this->generate_cta('bloc_6_3')[1],
            $this->generate_cta('bloc_6_3')[2],
        ];
    }

    public function get_fields_layout()
    {
        return [

            'key' => 'bloc_6_key',
            'name' => 'bloc_6',
            'label' => 'Bloc 6 - 3 columns',
            'display' => 'block',
            'sub_fields' => $this->get_unique_fields(),
            'min' => '',
            'max' => '',
        ];
    }
}
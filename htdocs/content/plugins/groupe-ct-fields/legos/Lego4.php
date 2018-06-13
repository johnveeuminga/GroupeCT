<?php

/**
 * Class Lego4
 * 4-columns with icons
 */
class Lego4 extends BaseLego implements LegoInterface
{
    public function get_unique_fields()
    {
        return [
            $this->generate_cta('bloc_4')[0],
            $this->generate_cta('bloc_4')[1],
            $this->generate_cta('bloc_4')[2],
            $this->generate_tab('bloc_4_1',                  __('Icon 1', 'GROUPE-CT') ),
            $this->generate_image('bloc_4_1_icon',           __('Icon', 'GROUPE-CT'), __('Maximum width 100px | Maximum height 100px', 'GROUPE-CT') ),
            $this->generate_text('bloc_4_1_title',           __('Title', 'GROUPE-CT') ),
            $this->generate_textarea('bloc_4_1_description', __('Description', 'GROUPE-CT') ),
            $this->generate_cta('bloc_4_1')[0],
            $this->generate_cta('bloc_4_1')[1],
            $this->generate_cta('bloc_4_1')[2],
            $this->generate_tab('bloc_4_2',                  __('Icon 2', 'GROUPE-CT') ),
            $this->generate_image('bloc_4_2_icon',           __('Icon', 'GROUPE-CT'), __('Maximum width 100px | Maximum height 100px', 'GROUPE-CT') ),
            $this->generate_text('bloc_4_2_title',           __('Title', 'GROUPE-CT') ),
            $this->generate_textarea('bloc_4_2_description', __('Description', 'GROUPE-CT') ),
            $this->generate_cta('bloc_4_2')[0],
            $this->generate_cta('bloc_4_2')[1],
            $this->generate_cta('bloc_4_2')[2],
            $this->generate_tab('bloc_4_3',                  __('Icon 3', 'GROUPE-CT') ),
            $this->generate_image('bloc_4_3_icon',           __('Icon', 'GROUPE-CT'), __('Maximum width 100px | Maximum height 100px', 'GROUPE-CT') ),
            $this->generate_text('bloc_4_3_title',           __('Title', 'GROUPE-CT') ),
            $this->generate_textarea('bloc_4_3_description', __('Description', 'GROUPE-CT') ),
            $this->generate_cta('bloc_4_3')[0],
            $this->generate_cta('bloc_4_3')[1],
            $this->generate_cta('bloc_4_3')[2],
            $this->generate_tab('bloc_4_4',                  __('Icon 4', 'GROUPE-CT') ),
            $this->generate_image('bloc_4_4_icon',           __('Icon', 'GROUPE-CT'), __('Maximum width 100px | Maximum height 100px', 'GROUPE-CT') ),
            $this->generate_text('bloc_4_4_title',           __('Title', 'GROUPE-CT') ),
            $this->generate_textarea('bloc_4_4_description', __('Description', 'GROUPE-CT') ),
            $this->generate_cta('bloc_4_4')[0],
            $this->generate_cta('bloc_4_4')[1],
            $this->generate_cta('bloc_4_4')[2],

        ];
    }

    public function get_fields_layout()
    {
        return [

            'key' => 'bloc_4_key',
            'name' => 'bloc_4',
            'label' => __('Bloc 4 - 4 icons', 'GROUPE-CT'),
            'display' => 'block',
            'sub_fields' => $this->get_unique_fields(),
            'min' => '',
            'max' => '',
        ];
    }
}
<?php

/**
 * Class Lego8
 * Collapsible Section
 */
class Lego8 extends BaseLego implements LegoInterface
{
    public function get_unique_fields()
    {
        return [
        	$this->generate_repeater('bloc_8_collapse',     __('Collapsible Drawer', 'GROUPE-CT'), [
		        $this->generate_image('bloc_8_icon',        __('Icon', 'GROUPE-CT'), __('Maximmum width: 50px | Maximum Height: 50px', 'GROUPE-CT') ),
		        $this->generate_text('bloc_8_title',        __('Title', 'GROUPE-CT') ),
		        $this->generate_wysiwyg('bloc_8_content',   __('Content', 'GROUPE-CT') ),
		        $this->generate_true_false('bloc_8_active', __('Open by default?', 'GROUPE-CT') ),
		        $this->generate_true_false('bloc_8_outside_wysiwyg', __('Outside WYSIWYG?', 'GROUPE-CT') ),
		        $this->generate_repeater('bloc_8_blocks', 'Drawer Blocks', [
		        	$this->generate_object('bloc_8_block', 'Block', ['bloc'])
		        ] ),

	        ] )
        ];
    }

    public function get_fields_layout()
    {
        return [

            'key' => 'bloc_8_key',
            'name' => 'bloc_8',
            'label' => 'Bloc 8 - Collapsible Section',
            'display' => 'block',
            'sub_fields' => $this->get_unique_fields(),
            'min' => '',
            'max' => '',
        ];
    }
}
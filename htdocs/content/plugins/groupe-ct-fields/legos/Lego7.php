<?php

/**
 * Class Lego7
 * Row repeater
 */
class Lego7 extends BaseLego implements LegoInterface
{
    public function get_unique_fields()
    {
        return [
        	$this->generate_repeater('bloc_7_row', 'Rows', [
		        // FIXME Image size to be defined
		        $this->generate_image('bloc_7_col_1_icon', 'Icon', 'Width: 170px | Height 170px'),
		        $this->generate_text('bloc_7_col_1_title', 'Title'),
		        $this->generate_textarea('bloc_7_col_1_description', 'Description'),
		        // FIXME Image size to be defined
		        $this->generate_image('bloc_7_col_2_icon', 'Icon', 'Width: 170px | Height 170px'),
		        $this->generate_text('bloc_7_col_2_title', 'Title'),
		        $this->generate_textarea('bloc_7_col_2_description', 'Description'),
	        ] )
        ];
    }

    public function get_fields_layout()
    {
        return [

            'key' => 'bloc_7_key',
            'name' => 'bloc_7',
            'label' => 'Bloc 7 - Row repeater',
            'display' => 'block',
            'sub_fields' => $this->get_unique_fields(),
            'min' => '',
            'max' => '',
        ];
    }
}
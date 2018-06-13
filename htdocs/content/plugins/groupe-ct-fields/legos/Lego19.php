<?php

/**
 * Class LegoStatic
 * Charge les blocs statiques sur demande
 */
class Lego19 extends BaseLego implements LegoInterface
{
	public function get_unique_fields()
	{
		return [
			$this->generate_color_picker('block_19_background_color', __('Background Colour', 'GROUPE-CT')),
			$this->generate_text('bloc_19_subheader', 'Subheader'),
            $this->generate_true_false('bloc_19_subheader_carret', 'Subheader red square'),
            $this->generate_true_false('bloc_19_center_subheader', 'Center subheader'),
			$this->generate_text('bloc_19_title', 'Title'),
			$this->generate_true_false('bloc_19_center_title', 'Center Title'),
			$this->generate_wysiwyg('bloc_19_description', 'Description'),
            $this->generate_true_false('bloc_19_center_description', 'Center description'),
            $this->generate_true_false('bloc_19_remove_padding', 'Removing padding'),
            $this->generate_true_false('bloc_19_remove_margin', 'Removing margin'),
		];
	}

	public function get_fields_layout()
	{
		return [

			'key' => 'bloc_19_key',
			'name' => 'bloc_19',
			'label' => 'Bloc 19 - Title',
			'display' => 'block',
			'sub_fields' => $this->get_unique_fields(),
			'min' => '',
			'max' => '',
		];
	}
}
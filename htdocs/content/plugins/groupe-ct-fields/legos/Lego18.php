<?php

/**
 * Class Lego18
 * 4-paragraphs
 */
class Lego18 extends BaseLego implements LegoInterface
{
	public function get_unique_fields()
	{
		return [
			$this->generate_tab('bloc_18_1',                  __('Column 1', 'GROUPE-CT') ),
			$this->generate_text('bloc_18_1_title',           __('Title', 'GROUPE-CT')),
			$this->generate_textarea('bloc_18_1_description', __('Description', 'GROUPE-CT')),
			$this->generate_cta('bloc_18_1')[0],
			$this->generate_cta('bloc_18_1')[1],
			$this->generate_cta('bloc_18_1')[2],
			$this->generate_tab('bloc_18_2',                  __('Column 2', 'GROUPE-CT') ),
			$this->generate_text('bloc_18_2_title',           __('Title', 'GROUPE-CT')),
			$this->generate_textarea('bloc_18_2_description', __('Description', 'GROUPE-CT')),
			$this->generate_cta('bloc_18_2')[0],
			$this->generate_cta('bloc_18_2')[1],
			$this->generate_cta('bloc_18_2')[2],
			$this->generate_tab('bloc_18_3',                  __('Column 3', 'GROUPE-CT') ),
			$this->generate_text('bloc_18_3_title',           __('Title', 'GROUPE-CT')),
			$this->generate_textarea('bloc_18_3_description', __('Description', 'GROUPE-CT')),
			$this->generate_cta('bloc_18_3')[0],
			$this->generate_cta('bloc_18_3')[1],
			$this->generate_cta('bloc_18_3')[2],
			$this->generate_tab('bloc_18_4',                  __('Column 4', 'GROUPE-CT') ),
			$this->generate_text('bloc_18_4_title',           __('Title', 'GROUPE-CT')),
			$this->generate_textarea('bloc_18_4_description', __('Description', 'GROUPE-CT')),
			$this->generate_cta('bloc_18_4')[0],
			$this->generate_cta('bloc_18_4')[1],
			$this->generate_cta('bloc_18_4')[2],
		];
	}

	public function get_fields_layout()
	{
		return [

			'key' => 'bloc_18_key',
			'name' => 'bloc_18',
			'label' => 'Bloc 18 - 4-Column Block',
			'display' => 'block',
			'sub_fields' => $this->get_unique_fields(),
			'min' => '',
			'max' => '',
		];
	}
}
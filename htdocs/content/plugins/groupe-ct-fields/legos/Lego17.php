<?php

/**
 * Class Lego17
 * Stats Banner
 */
class Lego17 extends BaseLego implements LegoInterface
{
	public function get_unique_fields()
	{
		return [
			// FIXME Image size to be defined
			$this->generate_tab('bloc_17_1',                  __('Statistic 1', 'GROUPE-CT') ),
			$this->generate_image('bloc_17_1_icon',           __('Icon', 'GROUPE-CT'), __('Width: 100px | Height: 100px', 'GROUPE-CT') ),
			$this->generate_text('bloc_17_1_number',          __('Stat Number', 'GROUPE-CT')),
			$this->generate_text('bloc_17_1_description',     __('Stat Description', 'GROUPE-CT')),
			$this->generate_tab('bloc_17_2',                  __('Statistic 2', 'GROUPE-CT') ),
			$this->generate_image('bloc_17_2_icon',           __('Icon', 'GROUPE-CT'), __('Width: 100px | Height: 100px', 'GROUPE-CT') ),
			$this->generate_text('bloc_17_2_number',          __('Stat Number', 'GROUPE-CT')),
			$this->generate_text('bloc_17_2_description',     __('Stat Description', 'GROUPE-CT')),
			$this->generate_tab('bloc_17_3',                  __('Statistic 3', 'GROUPE-CT') ),
			$this->generate_image('bloc_17_3_icon',           __('Icon', 'GROUPE-CT'), __('Width: 100px | Height: 100px', 'GROUPE-CT') ),
			$this->generate_text('bloc_17_3_number',          __('Stat Number', 'GROUPE-CT')),
			$this->generate_text('bloc_17_3_description',     __('Stat Description', 'GROUPE-CT')),
			$this->generate_tab('bloc_17_4',                  __('Statistic 4', 'GROUPE-CT') ),
			$this->generate_image('bloc_17_4_icon',           __('Icon', 'GROUPE-CT'), __('Width: 100px | Height: 100px', 'GROUPE-CT') ),
			$this->generate_text('bloc_17_4_number',          __('Stat Number', 'GROUPE-CT')),
			$this->generate_text('bloc_17_4_description',     __('Stat Description', 'GROUPE-CT')),
		];
	}

	public function get_fields_layout()
	{
		return [

			'key' => 'bloc_17_key',
			'name' => 'bloc_17',
			'label' => 'Bloc 17 - Stats Banner',
			'display' => 'block',
			'sub_fields' => $this->get_unique_fields(),
			'min' => '',
			'max' => '',
		];
	}
}
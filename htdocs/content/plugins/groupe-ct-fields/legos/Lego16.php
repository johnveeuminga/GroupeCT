<?php

/**
 * Class Lego16
 * Timeline
 */
class Lego16 extends BaseLego implements LegoInterface
{
	public function get_unique_fields()
	{
		return [
			$this->generate_select('bloc_16_timeline_order', __('Timeline Order', 'GROUPE-CT'), [
				'ASC' => __('Forward', 'GROUPE-CT'),
				'DESC' => __('Reverse', 'GROUPE-CT'),
			]),
		];
	}

	public function get_fields_layout()
	{
		return [

			'key' => 'bloc_16_key',
			'name' => 'bloc_16',
			'label' => 'Bloc 16 - Timeline',
			'display' => 'block',
			'sub_fields' => $this->get_unique_fields(),
			'min' => '',
			'max' => '',
		];
	}
}
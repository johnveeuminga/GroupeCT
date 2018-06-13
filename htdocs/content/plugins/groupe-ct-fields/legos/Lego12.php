<?php

/**
 * Class Lego12
 * Posts
 */
class Lego12 extends BaseLego implements LegoInterface
{
	public function get_unique_fields()
	{
		// THIS IS VOLUNTARILY EMPTY -- POSTS WILL BE DEFINED IN TEMPLATES
		return [];
	}

	public function get_fields_layout()
	{
		return [

			'key' => 'bloc_12_key',
			'name' => 'bloc_12',
			'label' => 'Bloc 12 - Posts',
			'display' => 'block',
			'sub_fields' => $this->get_unique_fields(),
			'min' => '',
			'max' => '',
		];
	}
}
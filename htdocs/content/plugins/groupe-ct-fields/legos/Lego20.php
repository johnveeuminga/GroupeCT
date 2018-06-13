<?php

/**
 * Class LegoStatic
 * Charge les blocs statiques sur demande
 */
class Lego20 extends BaseLego implements LegoInterface
{
	public function get_unique_fields()
	{
		return [
			$this->generate_wysiwyg('bloc_20_wysiwyg', 'Content'),
		];
	}

	public function get_fields_layout()
	{
		return [

			'key' => 'bloc_20_key',
			'name' => 'bloc_20',
			'label' => 'Bloc 20 - WYSIWYG',
			'display' => 'block',
			'sub_fields' => $this->get_unique_fields(),
			'min' => '',
			'max' => '',
		];
	}
}
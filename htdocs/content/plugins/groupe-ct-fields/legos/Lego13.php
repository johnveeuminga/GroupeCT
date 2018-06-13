<?php

/**
 * Class Lego13
 * Locations Block
 */
class Lego13 extends BaseLego implements LegoInterface
{
	public function get_unique_fields()
	{
		return [
			$this->generate_repeater(
				'bloc_13_city',
				'City',
				[
					$this->generate_text('bloc_13_city_name', 'City Name'),
					$this->generate_repeater(
						'block_13_office',
						'Office',
						[
							$this->generate_text('block_13_office_title', 'Title'),
							$this->generate_text('block_13_office_address', 'Address'),
							$this->generate_text('block_13_office_phone', 'Phone'),
							$this->generate_text('block_13_office_fax', 'Fax'),
							$this->generate_text('block_13_office_toll_free', 'Toll Free'),
                            $this->generate_text('block_13_office_email', 'Email'),
                            $this->generate_text('block_13_office_email_2', 'Email 2'),
							$this->generate_url('block_13_office_gmap_link', 'Google Maps Link'),
						]
					)
				]
			),
		];
	}

	public function get_fields_layout()
	{
		return [

			'key' => 'bloc_13_key',
			'name' => 'bloc_13',
			'label' => 'Bloc 13 - Locations',
			'display' => 'block',
			'sub_fields' => $this->get_unique_fields(),
			'min' => '',
			'max' => '',
		];
	}
}
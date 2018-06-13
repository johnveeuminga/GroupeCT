<?php

/**
 * Class Lego15
 * Team
 */
class Lego15 extends BaseLego implements LegoInterface
{
	public function get_unique_fields()
	{
		return [
			$this->generate_repeater('bloc_15_team', __('Teams', 'GROUPE-CT'), [
				$this->generate_text('block_15_team_title', __('Team Title', 'GROUPE-CT')),
				$this->generate_repeater('bloc_15_team_members', __('Team Members', 'GROUPE-CT'), [
					$this->generate_object('bloc_15_team_member', __('Member'), ['team_member'])
				])
			]),
		];
	}

	public function get_fields_layout()
	{
		return [

			'key' => 'bloc_15_key',
			'name' => 'bloc_15',
			'label' => 'Bloc 15 - Team',
			'display' => 'block',
			'sub_fields' => $this->get_unique_fields(),
			'min' => '',
			'max' => '',
		];
	}
}
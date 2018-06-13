<?php

/**
 * Class Lego14
 * Job Offer
 */
class Lego14 extends BaseLego implements LegoInterface
{
	public function get_unique_fields()
	{
		return [
            $this->generate_text('bloc_14_collapse_title',        __('Collapse Title', 'GROUPE-CT') ),
			$this->generate_repeater('bloc_14_jobs', __('Job Offers', 'GROUPE-CT'), [
				$this->generate_object('bloc_14_job', __('Job Offer'), ['job_offer'])
			]),
		];
	}

	public function get_fields_layout()
	{
		return [

			'key' => 'bloc_14_key',
			'name' => 'bloc_14',
			'label' => 'Bloc 14 - Job Offer',
			'display' => 'block',
			'sub_fields' => $this->get_unique_fields(),
			'min' => '',
			'max' => '',
		];
	}
}
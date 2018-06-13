<?php

/**
 * Class Lego1
 * Header (Homepage & Standard)
 */
class Lego1 extends BaseLego implements LegoInterface
{
    private function get_unique_fields()
    {
        return [
        	$this->generate_select('bloc_1_header_type', __('Header Type', 'GROUPE-CT'), [
		        'standard' => __('Standard', 'GROUPE-CT'),
        		'slider' => __('Slider', 'GROUPE-CT'),
	        ]),
			$this->generate_repeater('bloc_1_slider', __('Slider', 'GROUPE-CT'),
				[
					// FIXME Image size to be defined
					$this->generate_image('bloc_1_slide_image', __('Image', 'GROUPE-CT'), __('TBDxTBD', 'GROUPE-CT') ),
					$this->generate_text('bloc_1_slide_title', __('Title', 'GROUPE-CT') ),
					$this->generate_cta('bloc_1_slide')[0],
					$this->generate_cta('bloc_1_slide')[1],
					$this->generate_cta('bloc_1_slide')[2],
				],
				1,
				6,
				[[[
					'field' => 'bloc_1_header_type_key',
					'operator' => '===',
					'value' => 'slider'
				]]]
			),
	        // FIXME Image size to be defined
	        $this->generate_image('bloc_1_header_image', __('Image', 'GROUPE-CT'), __('TBDxTBD', 'GROUPE-CT'),
		        [[[
			        'field' => 'bloc_1_header_type_key',
			        'operator' => '===',
			        'value' => 'standard'
		        ]]]
	        ),
	        $this->generate_text('bloc_1_header_title', __('Title', 'GROUPE-CT'),
		        [[[
			        'field' => 'bloc_1_header_type_key',
			        'operator' => '===',
			        'value' => 'standard'
		        ]]]
	        ),
	        $this->generate_cta('bloc_1_header_cta', [[[
		            'field' => 'bloc_1_header_type_key',
		            'operator' => '===',
		            'value' => 'standard'
            ]]])[0],
	        $this->generate_cta('bloc_1_header_cta', [[[
		        'field' => 'bloc_1_header_type_key',
		        'operator' => '===',
		        'value' => 'standard'
	        ]]])[1],
	        $this->generate_cta('bloc_1_header_cta', [[[
		        'field' => 'bloc_1_header_type_key',
		        'operator' => '===',
		        'value' => 'standard'
	        ]]])[2],
        ];
    }

    public function get_fields_layout()
    {
        return [
            'key' => '5920b3ad5aec0',
            'name' => 'bloc_1',
            'label' => __('Bloc 1 - Header', 'GROUPE-CT'),
            'display' => 'block',
            'sub_fields' => $this->get_unique_fields(),
	        'min' => '',
	        'max' => ''
        ];
    }
}
<?php

include_once __DIR__ . '/legos/BaseLego.php';
include_once __DIR__ . '/legos/LegoInterface.php';
include_once __DIR__ . '/legos/Lego1.php';
include_once __DIR__ . '/legos/Lego2.php';
include_once __DIR__ . '/legos/Lego3.php';
include_once __DIR__ . '/legos/Lego4.php';
include_once __DIR__ . '/legos/Lego5.php';
include_once __DIR__ . '/legos/Lego6.php';
include_once __DIR__ . '/legos/Lego7.php';
include_once __DIR__ . '/legos/Lego8.php';
include_once __DIR__ . '/legos/Lego9.php';
include_once __DIR__ . '/legos/Lego10.php';
include_once __DIR__ . '/legos/Lego11.php';
include_once __DIR__ . '/legos/Lego12.php';
include_once __DIR__ . '/legos/Lego13.php';
include_once __DIR__ . '/legos/Lego14.php';
include_once __DIR__ . '/legos/Lego15.php';
include_once __DIR__ . '/legos/Lego16.php';
include_once __DIR__ . '/legos/Lego17.php';
include_once __DIR__ . '/legos/Lego18.php';
include_once __DIR__ . '/legos/Lego19.php';
include_once __DIR__ . '/legos/Lego20.php';
include_once __DIR__ . '/legos/LegoStatic.php';
include_once __DIR__ . '/legos/LegoPadding.php';

class LegoBuilder
{
    public function run()
    {
	    if( function_exists('acf_add_local_field_group') ):

	        $lego1 = new Lego1();
	        $lego2 = new Lego2();
	        $lego3 = new Lego3();
	        $lego4 = new Lego4();
	        $lego5 = new Lego5();
	        $lego6 = new Lego6();
	        $lego7 = new Lego7();
	        $lego8 = new Lego8();
	        $lego9 = new Lego9();
		    $lego10 = new Lego10();
		    $lego11 = new Lego11();
		    $lego12 = new Lego12();
		    $lego13 = new Lego13();
		    $lego14 = new Lego14();
		    $lego15 = new Lego15();
		    $lego16 = new Lego16();
		    $lego17 = new Lego17();
		    $lego18 = new Lego18();
		    $lego19 = new Lego19();
		    $lego20 = new Lego20();
		    $legoStatic = new LegoStatic();
		    $legoPadding = new LegoPadding();

	        acf_add_local_field_group(array (
	            'key' => 'group_5920b39e18711',
	            'title' => 'Flexible Content',
	            'fields' => array (
	                array (
	                    'key' => 'field_5920b3a8429a1',
	                    'label' => 'Flexible Content',
	                    'name' => 'bloc_flexible_content',
	                    'type' => 'flexible_content',
	                    'instructions' => '',
	                    'required' => 0,
	                    'conditional_logic' => 0,
	                    'wrapper' => array (
	                        'width' => '',
	                        'class' => '',
	                        'id' => '',
	                    ),
	                    'layouts' => array (
//	                        'bloc_1_layout_key' => $lego1->get_fields_layout(),
	                        'bloc_2_layout_key' => $lego2->get_fields_layout(),
	                        'bloc_3_layout_key' => $lego3->get_fields_layout(),
	                        'bloc_4_layout_key' => $lego4->get_fields_layout(),
	                        'bloc_5_layout_key' => $lego5->get_fields_layout(),
	                        'bloc_6_layout_key' => $lego6->get_fields_layout(),
	                        'bloc_7_layout_key' => $lego7->get_fields_layout(),
	                        'bloc_8_layout_key' => $lego8->get_fields_layout(),
	                        'bloc_9_layout_key' => $lego9->get_fields_layout(),
	                        'bloc_10_layout_key' => $lego10->get_fields_layout(),
	                        'bloc_11_layout_key' => $lego11->get_fields_layout(),
//	                        'bloc_12_layout_key' => $lego12->get_fields_layout(),
	                        'bloc_13_layout_key' => $lego13->get_fields_layout(),
	                        'bloc_14_layout_key' => $lego14->get_fields_layout(),
	                        'bloc_15_layout_key' => $lego15->get_fields_layout(),
	                        'bloc_16_layout_key' => $lego16->get_fields_layout(),
	                        'bloc_17_layout_key' => $lego17->get_fields_layout(),
	                        'bloc_18_layout_key' => $lego18->get_fields_layout(),
	                        'bloc_19_layout_key' => $lego19->get_fields_layout(),
	                        'bloc_20_layout_keyo' => $lego20->get_fields_layout(),
	                        'bloc_static_layout_key' => $legoStatic->get_fields_layout(),
	                        'bloc_padding' => $legoPadding->get_fields_layout(),
	                    ),
	                    'button_label' => 'Add Row',
	                    'min' => '',
	                    'max' => '',
	                ),
	            ),
	            'location' => array (
	                array (
	                    array (
	                        'param' => 'post_type',
	                        'operator' => '==',
	                        'value' => 'bloc',
	                    ),
	                ),
	            ),
	            'menu_order' => 0,
	            'position' => 'normal',
	            'style' => 'default',
	            'label_placement' => 'top',
	            'instruction_placement' => 'label',
	            'hide_on_screen' => '',
	            'active' => 1,
	            'description' => '',
	        ));

		    acf_add_local_field_group(array (
			    'key' => 'group_59345292b5caf',
			    'title' => 'Page blocks',
			    'fields' => array (
				    array (
					    'key' => 'field_5934529e8af14',
					    'label' => 'Blocks',
					    'name' => 'blocks',
					    'type' => 'repeater',
					    'instructions' => '',
					    'required' => 0,
					    'conditional_logic' => 0,
					    'wrapper' => array (
						    'width' => '',
						    'class' => '',
						    'id' => '',
					    ),
					    'collapsed' => '',
					    'min' => 0,
					    'max' => 0,
					    'layout' => 'table',
					    'button_label' => '',
					    'sub_fields' => array (
						    array (
							    'key' => 'field_593452ae8af15',
							    'label' => 'Block',
							    'name' => 'block',
							    'type' => 'post_object',
							    'instructions' => '',
							    'required' => 0,
							    'conditional_logic' => 0,
							    'wrapper' => array (
								    'width' => '',
								    'class' => '',
								    'id' => '',
							    ),
							    'post_type' => array (
								    0 => 'bloc',
							    ),
							    'taxonomy' => array (
							    ),
							    'allow_null' => 0,
							    'multiple' => 0,
							    'return_format' => 'object',
							    'ui' => 1,
						    ),
					    ),
				    ),
			    ),
			    'location' => array (
				    array (
					    array (
						    'param' => 'post_type',
						    'operator' => '==',
						    'value' => 'page',
					    ),
				    ),
			    ),
			    'menu_order' => 0,
			    'position' => 'normal',
			    'style' => 'default',
			    'label_placement' => 'top',
			    'instruction_placement' => 'label',
			    'hide_on_screen' => '',
			    'active' => 1,
			    'description' => '',
		    ));

	    endif;
    }
}
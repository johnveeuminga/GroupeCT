<?php

namespace Theme\Models;

class Bloc {

	private $block_type;
	private $fields;


	public function __construct($flexible_layout)
	{
		$this->block_type = $flexible_layout;
	}


	public function get_field($field_name)
	{
		if (empty($this->fields))
		{
			$this->fields = $this->get_fields();
		}

		return $this->fields[$field_name];
	}

	public function get_fields()
	{
		if (empty($this->fields)) {
			switch ( $this->block_type ) {
				// Bloc 1 - HEADER
				case "bloc_1":
					$this->fields['bloc_1_header_type'] = get_sub_field( 'bloc_1_header_type' );
					if ("standard" === $this->fields['bloc_1_header_type'])
					{
						$this->fields['bloc_1_header_image'] = get_sub_field('bloc_1_header_image');
						$this->fields['bloc_1_header_title'] = get_sub_field('bloc_1_header_title');
						$this->fields['bloc_1_header_cta_label'] = get_sub_field('bloc_1_header_cta_label');
						$this->fields['bloc_1_header_cta_link'] = get_sub_field('bloc_1_header_cta_link');
						$this->fields['bloc_1_header_cta_blank'] = get_sub_field('bloc_1_header_cta_blank');
					}
					else if ("slider" === $this->fields['bloc_1_header_type'])
					{
						$this->fields['bloc_1_slider'] = get_sub_field('bloc_1_slider');
					}
					break;
				case "bloc_2":
					$this->fields['bloc_2_slides'] = get_sub_field('bloc_2_slide');
					break;
				case "bloc_3":
					$this->fields['bloc_3_subheader'] = get_sub_field('bloc_3_subheader');
					$this->fields['bloc_3_title'] = get_sub_field('bloc_3_title');
					$this->fields['bloc_3_subtitle'] = get_sub_field('bloc_3_subtitle');
					$this->fields['bloc_3_text'] = get_sub_field('bloc_3_text');
					$this->fields['bloc_3_cta_label'] = get_sub_field('bloc_3_cta_label');
					$this->fields['bloc_3_cta_link'] = get_sub_field('bloc_3_cta_link');
					$this->fields['bloc_3_cta_blank'] = get_sub_field('bloc_3_cta_blank');
					$this->fields['bloc_3_cta_open_contact'] = get_sub_field('bloc_3_cta_open_contact');
					$this->fields['bloc_3_phone_1_location'] = get_sub_field('bloc_3_phone_1_location');
					$this->fields['bloc_3_phone_1_label'] = get_sub_field('bloc_3_phone_1_label');
					$this->fields['bloc_3_phone_1'] = get_sub_field('bloc_3_phone_1');
					$this->fields['bloc_3_phone_2_location'] = get_sub_field('bloc_3_phone_2_location');
					$this->fields['bloc_3_phone_2_label'] = get_sub_field('bloc_3_phone_2_label');
					$this->fields['bloc_3_phone_2'] = get_sub_field('bloc_3_phone_2');
					$this->fields['bloc_3_image'] = get_sub_field('bloc_3_image');
					$this->fields['bloc_3_image_left'] = get_sub_field('bloc_3_image_left');
					break;
				case "bloc_4":
                    $this->fields['bloc_4_cta_label'] = get_sub_field('bloc_4_cta_label');
                    $this->fields['bloc_4_cta_link'] = get_sub_field('bloc_4_cta_link');
                    $this->fields['bloc_4_cta_blank'] = get_sub_field('bloc_4_cta_blank');

					$this->fields['bloc_4_1_icon'] = get_sub_field('bloc_4_1_icon');
					$this->fields['bloc_4_1_title'] = get_sub_field('bloc_4_1_title');
					$this->fields['bloc_4_1_description'] = nl2br(get_sub_field('bloc_4_1_description'));
					$this->fields['bloc_4_1_cta_label'] = get_sub_field('bloc_4_1_cta_label');
					$this->fields['bloc_4_1_cta_link'] = get_sub_field('bloc_4_1_cta_link');
					$this->fields['bloc_4_1_cta_blank'] = get_sub_field('bloc_4_1_cta_blank');

					$this->fields['bloc_4_2_icon'] = get_sub_field('bloc_4_2_icon');
					$this->fields['bloc_4_2_title'] = get_sub_field('bloc_4_2_title');
					$this->fields['bloc_4_2_description'] = nl2br(get_sub_field('bloc_4_2_description'));
					$this->fields['bloc_4_2_cta_label'] = get_sub_field('bloc_4_2_cta_label');
					$this->fields['bloc_4_2_cta_link'] = get_sub_field('bloc_4_2_cta_link');
					$this->fields['bloc_4_2_cta_blank'] = get_sub_field('bloc_4_2_cta_blank');

					$this->fields['bloc_4_3_icon'] = get_sub_field('bloc_4_3_icon');
					$this->fields['bloc_4_3_title'] = get_sub_field('bloc_4_3_title');
					$this->fields['bloc_4_3_description'] = nl2br(get_sub_field('bloc_4_3_description'));
					$this->fields['bloc_4_3_cta_label'] = get_sub_field('bloc_4_3_cta_label');
					$this->fields['bloc_4_3_cta_link'] = get_sub_field('bloc_4_3_cta_link');
					$this->fields['bloc_4_3_cta_blank'] = get_sub_field('bloc_4_3_cta_blank');

					$this->fields['bloc_4_4_icon'] = get_sub_field('bloc_4_4_icon');
					$this->fields['bloc_4_4_title'] = get_sub_field('bloc_4_4_title');
					$this->fields['bloc_4_4_description'] = nl2br(get_sub_field('bloc_4_4_description'));
					$this->fields['bloc_4_4_cta_label'] = get_sub_field('bloc_4_4_cta_label');
					$this->fields['bloc_4_4_cta_link'] = get_sub_field('bloc_4_4_cta_link');
					$this->fields['bloc_4_4_cta_blank'] = get_sub_field('bloc_4_4_cta_blank');
					break;
				case "bloc_5":
					$this->fields['bloc_5_slides'] = get_sub_field('bloc_5_slide');
					break;
				case "bloc_6":
					$this->fields['bloc_6_1_icon'] = get_sub_field('bloc_6_1_icon');
					$this->fields['bloc_6_1_title'] = get_sub_field('bloc_6_1_title');
					$this->fields['bloc_6_1_description'] = get_sub_field('bloc_6_1_description');
					$this->fields['bloc_6_1_cta_label'] = get_sub_field('bloc_6_1_cta_label');
					$this->fields['bloc_6_1_cta_link'] = get_sub_field('bloc_6_1_cta_link');
					$this->fields['bloc_6_1_cta_blank'] = get_sub_field('bloc_6_1_cta_blank');

					$this->fields['bloc_6_2_icon'] = get_sub_field('bloc_6_2_icon');
					$this->fields['bloc_6_2_title'] = get_sub_field('bloc_6_2_title');
					$this->fields['bloc_6_2_description'] = get_sub_field('bloc_6_2_description');
					$this->fields['bloc_6_2_cta_label'] = get_sub_field('bloc_6_2_cta_label');
					$this->fields['bloc_6_2_cta_link'] = get_sub_field('bloc_6_2_cta_link');
					$this->fields['bloc_6_2_cta_blank'] = get_sub_field('bloc_6_2_cta_blank');

					$this->fields['bloc_6_3_icon'] = get_sub_field('bloc_6_3_icon');
					$this->fields['bloc_6_3_title'] = get_sub_field('bloc_6_3_title');
					$this->fields['bloc_6_3_description'] = get_sub_field('bloc_6_3_description');
					$this->fields['bloc_6_3_cta_label'] = get_sub_field('bloc_6_3_cta_label');
					$this->fields['bloc_6_3_cta_link'] = get_sub_field('bloc_6_3_cta_link');
					$this->fields['bloc_6_3_cta_blank'] = get_sub_field('bloc_6_3_cta_blank');

					$this->fields['bloc_6_3_blocks'] = get_sub_field('bloc_8_blocks');
					break;
				case "bloc_7":
					$this->fields['bloc_7_rows'] = get_sub_field('bloc_7_row');
					break;
				case "bloc_8":
					$this->fields['bloc_8_collapse'] = get_sub_field('bloc_8_collapse');
					break;
				case "bloc_9":

					$this->fields['bloc_9_title'] = get_sub_field('bloc_9_title');

					$this->fields['bloc_9_1_label'] = get_sub_field('bloc_9_1_label');
					$this->fields['bloc_9_1_primary'] = get_sub_field('bloc_9_1_primary');
					$this->fields['bloc_9_1_unfilled'] = get_sub_field('bloc_9_1_unfilled');
					$this->fields['bloc_9_1_percentage'] = get_sub_field('bloc_9_1_percentage');
					$this->fields['bloc_9_1_description'] = get_sub_field('bloc_9_1_description');
					$this->fields['bloc_9_1_source'] = get_sub_field('bloc_9_1_source');
					$this->fields['bloc_9_1_image'] = get_sub_field('bloc_9_1_image');

					$this->fields['bloc_9_2_label'] = get_sub_field('bloc_9_2_label');
					$this->fields['bloc_9_2_primary'] = get_sub_field('bloc_9_2_primary');
					$this->fields['bloc_9_2_unfilled'] = get_sub_field('bloc_9_2_unfilled');
					$this->fields['bloc_9_2_percentage'] = get_sub_field('bloc_9_2_percentage');
					$this->fields['bloc_9_2_description'] = get_sub_field('bloc_9_2_description');
					$this->fields['bloc_9_2_source'] = get_sub_field('bloc_9_2_source');
                    $this->fields['bloc_9_2_image'] = get_sub_field('bloc_9_2_image');
					break;
				case "bloc_10":
                    $this->fields['bloc_10_products'] = get_sub_field('bloc_10_products');
					break;
				case "bloc_11":
					$this->fields['bloc_11_software_products'] = get_sub_field('bloc_11_software_products');
					break;
				case "bloc_12":
					$this->fields['bloc_12_posts'] = Post::all();
					break;
				case "bloc_13":
					$this->fields['bloc_13_cities'] = get_sub_field('bloc_13_city');
					break;
				case "bloc_14":
					$this->fields['bloc_14_collapse_title'] = get_sub_field('bloc_14_collapse_title');
					$this->fields['bloc_14_jobs'] = get_sub_field('bloc_14_jobs');
					break;
				case "bloc_15":
					$this->fields['bloc_15_teams'] = get_sub_field('bloc_15_team');
					break;
				case "bloc_16":
					$order = get_sub_field('bloc_16_timeline_order');
					$this->fields['block_16_timeline_events'] = TimelineEvent::all(true, $order);
					break;
				case "bloc_17":
					$this->fields['bloc_17_background_image'] = get_sub_field('bloc_17_background_image');

					$this->fields['bloc_17_1_icon'] = get_sub_field('bloc_17_1_icon');
					$this->fields['bloc_17_1_number'] = get_sub_field('bloc_17_1_number');
					$this->fields['bloc_17_1_description'] = get_sub_field('bloc_17_1_description');

					$this->fields['bloc_17_2_icon'] = get_sub_field('bloc_17_2_icon');
					$this->fields['bloc_17_2_number'] = get_sub_field('bloc_17_2_number');
					$this->fields['bloc_17_2_description'] = get_sub_field('bloc_17_2_description');

					$this->fields['bloc_17_3_icon'] = get_sub_field('bloc_17_3_icon');
					$this->fields['bloc_17_3_number'] = get_sub_field('bloc_17_3_number');
					$this->fields['bloc_17_3_description'] = get_sub_field('bloc_17_3_description');

					$this->fields['bloc_17_4_icon'] = get_sub_field('bloc_17_4_icon');
					$this->fields['bloc_17_4_number'] = get_sub_field('bloc_17_4_number');
					$this->fields['bloc_17_4_description'] = get_sub_field('bloc_17_4_description');
					break;
				case "bloc_18":
					$this->fields['bloc_18_title'] = get_sub_field('bloc_18_title');

					$this->fields['bloc_18_1_title'] = get_sub_field('bloc_18_1_title');
					$this->fields['bloc_18_1_description'] = get_sub_field('bloc_18_1_description');
					$this->fields['bloc_18_1_cta_label'] = get_sub_field('bloc_18_1_cta_label');
					$this->fields['bloc_18_1_cta_link'] = get_sub_field('bloc_18_1_cta_link');
					$this->fields['bloc_18_1_cta_blank'] = get_sub_field('bloc_18_1_cta_blank');

					$this->fields['bloc_18_2_title'] = get_sub_field('bloc_18_2_title');
					$this->fields['bloc_18_2_description'] = get_sub_field('bloc_18_2_description');
					$this->fields['bloc_18_2_cta_label'] = get_sub_field('bloc_18_2_cta_label');
					$this->fields['bloc_18_2_cta_link'] = get_sub_field('bloc_18_2_cta_link');
					$this->fields['bloc_18_2_cta_blank'] = get_sub_field('bloc_18_2_cta_blank');


					$this->fields['bloc_18_3_title'] = get_sub_field('bloc_18_3_title');
					$this->fields['bloc_18_3_description'] = get_sub_field('bloc_18_3_description');
					$this->fields['bloc_18_3_cta_label'] = get_sub_field('bloc_18_3_cta_label');
					$this->fields['bloc_18_3_cta_link'] = get_sub_field('bloc_18_3_cta_link');
					$this->fields['bloc_18_3_cta_blank'] = get_sub_field('bloc_18_3_cta_blank');

					$this->fields['bloc_18_4_title'] = get_sub_field('bloc_18_4_title');
					$this->fields['bloc_18_4_description'] = get_sub_field('bloc_18_4_description');
					$this->fields['bloc_18_4_cta_label'] = get_sub_field('bloc_18_4_cta_label');
					$this->fields['bloc_18_4_cta_link'] = get_sub_field('bloc_18_4_cta_link');
					$this->fields['bloc_18_4_cta_blank'] = get_sub_field('bloc_18_4_cta_blank');
					break;
				case "bloc_19":
					$this->fields['block_19_background_color'] = get_sub_field('block_19_background_color');
                    $this->fields['bloc_19_subheader'] = get_sub_field('bloc_19_subheader');
                    $this->fields['bloc_19_subheader_carret'] = get_sub_field('bloc_19_subheader_carret');
                    $this->fields['bloc_19_center_subheader'] = get_sub_field('bloc_19_center_subheader');
                    $this->fields['bloc_19_title'] = get_sub_field('bloc_19_title');
                    $this->fields['bloc_19_center_title'] = get_sub_field('bloc_19_center_title');
                    $this->fields['bloc_19_description'] = get_sub_field('bloc_19_description');
                    $this->fields['bloc_19_center_description'] = get_sub_field('bloc_19_center_description');
                    $this->fields['bloc_19_remove_padding'] = get_sub_field('bloc_19_remove_padding');
                    $this->fields['bloc_19_remove_margin'] = get_sub_field('bloc_19_remove_margin');
                    break;
				case "bloc_20":
                    $this->fields['bloc_20_wysiwyg'] = get_sub_field('bloc_20_wysiwyg');
					break;
				case "bloc_static":
				    $this->fields['bloc_static_file'] = get_sub_field('bloc_static_file');
					break;
				case "bloc_padding":
				    $this->fields['bloc_padding_mobile'] = get_sub_field('bloc_padding_mobile');
				    $this->fields['bloc_padding_tablet'] = get_sub_field('bloc_padding_tablet');
				    $this->fields['bloc_padding_laptop'] = get_sub_field('bloc_padding_laptop');
				    $this->fields['bloc_padding_desktop'] = get_sub_field('bloc_padding_desktop');
					break;
				default:
					break;
			}
		}


		return $this->fields;
	}

	public function load_path()
    {
        $dir = 'partials.components.' . ($this->block_type === 'bloc_static' ? 'blocs-static.' : 'blocs-dynamic.');
        $block_type = 'bloc_static' === $this->block_type ? $this->get_field('bloc_static_file') : $this->block_type;
        return $dir . $block_type;
    }

}
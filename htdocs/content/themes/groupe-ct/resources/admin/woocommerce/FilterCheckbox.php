<?php 
namespace Theme\WooCommerce;

use Themosis\Facades\Action;
use Themosis\Facades\Asset;
use WP_Error;

class FilterCheckbox{
	/**
	 * Class constructor
	 */
	public function __construct(){
		$this->createAttributeRangeColumns();
	}

	/**
	 * Class initialization
	 *
	 * @return void
	 */
	public function init(){
		Action::add('woocommerce_after_add_attribute_fields', array($this, 'renderCheckbox'));
		Action::add('woocommerce_after_edit_attribute_fields', array( $this, 'renderCheckboxEdit' ));
		Action::add('admin_enqueue_scripts', array($this, 'enqueueComponents'));
		Action::add('woocommerce_attribute_added', array($this, 'checkIfAttributeFilterRange'), 10, 2);
		Action::add('woocommerce_attribute_updated', array($this, 'handleAttributeRangeFilterEdit'), 10, 2);
	}

	/**
	 * Renders the checkbox and input
	 *
	 * @return void
	 */
	public function renderCheckbox(){
		?>
			<div id="filter__checkbox-container">
				<filter-checkbox></filter-checkbox>
			</div>

		<?php
	}

	/**
	 * Renders the checkbox and input for edit form
	 *
	 * @return void
	 */
	public function renderCheckboxEdit(){
		global $wpdb;

		$edit = $_GET['edit'];
		$attribute_to_edit = $wpdb->get_row( 'SELECT attribute_range, attribute_range_min, attribute_range_max, attribute_range_interval FROM ' . $wpdb->prefix . "woocommerce_attribute_taxonomies WHERE attribute_id = '$edit'" );
		?>
			<tr class="form-field">
				<th scope="row" valign="top">
					<p><?php esc_html_e( 'Enable Filter Range', GROUPE_CT ); ?></p>
				</th>
				<td>
					<div id="filter__checkbox-container">
						<filter-checkbox edit="true" 
							:enable-range="<?php echo $attribute_to_edit->attribute_range ? 'true' : 'false' ?>" 
							range-min="<?php echo !isset($attribute_to_edit->attribute_range_min) ? '' : $attribute_to_edit->attribute_range_min?>"
							range-max="<?php echo !isset($attribute_to_edit->attribute_range_max) ? '' : $attribute_to_edit->attribute_range_max ?>" 
							range-interval="<?php echo !isset($attribute_to_edit->attribute_range_interval) ? '' : $attribute_to_edit->attribute_range_interval ?>"
						>
						</filter-checkbox>
					</div>
				</td>
			</tr>
		<?php
	}

	/**
	 * Renders the styles for the filters
	 *
	 * @return void
	 */
	public function enqueueComponents(){
		$screen = get_current_screen();
		if($screen->id == 'product_page_product_attributes'){
        	wp_enqueue_script('components-js',  themosis_assets() . '/js/components.min.js', [], '', true);
        }
	}

	/**
	 * Checks if attribute filter range is checked.
	 *
	 * @param int   $id   Added attribute ID.
	 * @param array $data Attribute data.
	 * @return void
	 */
	public function checkIfAttributeFilterRange($id, $data){
		global $wpdb;
		if(isset($_POST['enable_range'])){
			$this->createAttributeRangeColumns();

			$result = $wpdb->update(
				$wpdb->prefix . "woocommerce_attribute_taxonomies",
				[
					'attribute_range' => isset($_POST['enable_range']) ? $_POST['enable_range'] : 0,
					'attribute_range_min' => isset($_POST['range_min']) ? $_POST['range_min'] : 0,
					'attribute_range_max' => isset($_POST['range_max']) ? $_POST['range_max'] : 0,
					'attribute_range_interval' => isset($_POST['range_interval']) ? $_POST['range_interval'] : 0
				],
				[
					'attribute_id' => $id
				]
			);
		}
	}

	/**
	 * Checks and creates attribute range columns not exist
	 *
	 * @return void
	 */
	private function createAttributeRangeColumns(){
		global $wpdb;
		$result = $wpdb->get_row( "SELECT * FROM wp_woocommerce_attribute_taxonomies");

		if($result){
			if(!isset($result->attribute_range)){
				$results = $wpdb->query( "ALTER TABLE wp_woocommerce_attribute_taxonomies 
					ADD attribute_range INT(1) NOT NULL DEFAULT 0,
					ADD attribute_range_min MEDIUMINT(9) NOT NULL DEFAULT 0,
					ADD attribute_range_max MEDIUMINT(9) NOT NULL DEFAULT 0,
					ADD attribute_range_interval MEDIUMINT(9) NOT NULL DEFAULT 0");
			}
		}
	}

	/**
	 * Handle edit form submission for attribute range filter
	 *
	 * @return void
	 */
	public function handleAttributeRangeFilterEdit($id, $data){
		global $wpdb;
		if(isset($_POST['enable_range'])){
			$result = $wpdb->update(
				$wpdb->prefix . "woocommerce_attribute_taxonomies",
				[
					'attribute_range' => $_POST['enable_range'] ? 1 : 0,
					'attribute_range_min' => isset($_POST['range_min']) ? $_POST['range_min'] : 0,
					'attribute_range_max' => isset($_POST['range_max']) ? $_POST['range_max'] : 0,
					'attribute_range_interval' => isset($_POST['range_interval']) ? $_POST['range_interval'] : 0
				],
				[
					'attribute_id' => $id
				]
			);
		}
	}
}
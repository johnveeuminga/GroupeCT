<?php 

namespace Theme\WooCommerce;

use Themosis\Facades\Action;
use Themosis\Facades\Form;

class ProductFilters{
	/**
	 * The taxonomy name for brands
	 *
	 * @var string $product_cat_tax_name
	 */
	protected $product_cat_tax_name = 'product_cat';

	/**
	 * Initializes the product filters
	 *
	 * @return void
	 */
	public function init(){
		Action::add($this->product_cat_tax_name . '_add_form_fields', array($this, 'addProductFiltersField'));
		Action::add($this->product_cat_tax_name . '_edit_form_fields', array($this, 'editProductFiltersField'));
		Action::add('edited_'.$this->product_cat_tax_name, array($this, 'saveProductFiltersMeta'), 10, 1);
		Action::add('create_'.$this->product_cat_tax_name, array($this, 'saveProductFiltersMeta'), 10, 1);

		$version = '2';
        $namespace = 'wp/v' . $version;
        $base = 'all-terms';
	}

	/**
	 * Prints the product filters select option
	 *
	 * @return void
	 */
	public function addProductFiltersField(){
		?>
		<div class="form-field product-filters-container">
			<label for="product-filters"><?php echo __('Product Filters', 'GROUPE-CT'); ?></label>
			<?php echo $this->buildProductFiltersField(); ?>
			<p>
				<?php echo __('Select product attributes to be used as filters later on. Note that sub/child categories filters are ignored and just uses the parents filters.', 'GROUPE-CT'); ?>
			</p>
		</div>
		<script>
			$(document).ready( function(){
				$('#parent').change( function(e){
					if($(this).val() !== -1){
						$('.product-filters-container').hide();
					}else{
						$('.product-filters-container').show();
					}
				});
			});
		</script>
		<?php
	}

	/**
	 * Prints the edit product filters select option
	 *
	 * @return void
	 */
	public function editProductFiltersField($term){
		$product_attributes = wc_get_attribute_taxonomies();
		$product_cat_filters = get_term_meta($term->term_id, 'product-cat-filters');
		?>
		<tr class="form-field">
			<th scope="row" valign="top">
				<label for="product-filters"><?php echo __('Product Filters', 'GROUPE-CT'); ?></label>
			</th>
			<td>
				<?php echo $this->buildProductFiltersField($product_cat_filters); ?>
				<p class="description">
					<?php echo __('Select product attributes to be used as filters later on. Note that sub/child categories filters are ignored and just uses the parents filters.', 'GROUPE-CT') ?>
				</p>
			</td>
		</tr>
		<?php  
	}

	/**
	 * Build the product filters field
	 *
	 * @param array $values The default values
	 *
	 * @return void
	 */
	private function buildProductFiltersField($values = []){
		$product_attributes = wc_get_attribute_taxonomies();
		$product_attributes_option = [];

		foreach($product_attributes as $product_attribute){
			$product_attributes_option[(string)$product_attribute->attribute_name] = $product_attribute->attribute_label;
		}
		$filters = Form::select( 'product_cat_filters',
			[
				$product_attributes_option
			],
			$values,
			[
				'multiple'
			]
		);

		return $filters;
	}

	/**
	 * Handles the saving of the taxonomy presented above.
	 *
	 * @return void
	 */
	public function saveProductFiltersMeta($term_id){
		if(!isset($_POST['parent']) && $_POST['parent'] == '-1'){
			$old_product_filters = get_term_meta($term_id, 'product-cat-filters', false);
			$new_product_filters = isset($_POST['product_cat_filters']) ? $_POST['product_cat_filters'] : [];

			if(empty($new_product_filters)){
				delete_term_meta($term, 'product-cat-filters');
			}else{
				$product_cat_filters_existing = [];


				if(!empty($old_product_filters)){
					foreach($old_product_filters as $filter){
						if(!in_array($filter,$new_product_filters)){
							delete_term_meta($term_id, 'product-cat-filters', $filter);
						}else{
							$product_cat_filters_existing[] = $filter;
						}
					}
				}

				$product_filter_to_save = array_diff($new_product_filters, $product_cat_filters_existing);

				if(!empty($product_filter_to_save)){
					foreach($product_filter_to_save as $filter){
						add_term_meta($term_id, 'product-cat-filters', $filter, false);
					}
				}
			}

		}
	}
}
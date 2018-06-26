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
		$this->registerAddUseAsFilter();
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
		global $user;
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
		

		if(isset($_POST['parent']) && $_POST['parent'] == '-1'){
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

	/**
	 * Registers custom options for creation of terms of product attributes.
	 *
	 * @return void
	 */
	public function registerAddUseAsFilter(){
		foreach(wc_get_attribute_taxonomies() as $attribute){
			Action::add('pa_' . $attribute->attribute_name . '_add_form_fields', array($this, 'createSearchTermFormField'));
			Action::add('pa_' . $attribute->attribute_name . '_edit_form_fields', array($this, 'createSearchTermFormFieldEdit'), 10, 1 );
			Action::add('edited_'.'pa_' . $attribute->attribute_name, array($this, 'addTermMetaForSearchIndex'), 10, 1);
			Action::add('create_' . 'pa_' . $attribute->attribute_name, array($this, 'addTermMetaForSearchIndex'), 10, 1);
		}
	}

	/**
	 * Create use as search term form field.
	 *
	 * @return void
	 */
	public function createSearchTermFormField(){
		$input = Form::checkbox('use_search_term_index', 'Use this field as a search term index');
		?>

		<div class="form-field product-filters-container">
			<?php echo $input ?>
			<p>
				<?php echo __('Check to use this term to search index and also display it on the front end.', 'GROUPE-CT'); ?>
			</p>
		</div>

		<?php 
	}

	/**
	 * Create use as search term for edit view.
	 *
	 * @return void
	 */
	public function createSearchTermFormFieldEdit($term){
		$term_meta = get_term_meta($term->term_id, 'search-term-index');
		if($term_meta){
			$selected = ['true'];
		}

		$input = Form::checkbox('use_search_term_index', 
			['true' => 'Use this term as index'],
			$selected ?? null,
			[
				'id' => 'search-term-index'
			]
		);
		?>

		<tr class="form-field">
			<th scope="row" valign="top">
				<label for="search-term-index"><?php echo __('Use this field as a search term index', 'GROUPE-CT'); ?></label>
			</th>
			<td>
				<?php echo $input ?>
				<p class="description">
					<?php echo __('Check to use this term to search index and also display it on the front end.', 'GROUPE-CT') ?>
				</p>
			</td>
		</tr>

		<?php 
	}

	public function addTermMetaForSearchIndex($term){
		if(isset($_POST['use_search_term_index'])){
			add_term_meta($term, 'search-term-index', true, true);
		}else{
			if(get_term_meta($term, 'search-term-index', false)){
				delete_term_meta($term, 'search-term-index');
			}
		}
	}
}
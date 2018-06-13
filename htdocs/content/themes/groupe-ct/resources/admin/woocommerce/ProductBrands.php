<?php 
namespace Theme\WooCommerce;

use Themosis\Facades\Action;
use Themosis\Facades\Field;
use Themosis\Facades\Taxonomy;

/**
 * Product Brands Taxonomy.
 */
class ProductBrands{
	/**
	 * The taxonomy name for brands
	 *
	 * @var string $product_brands
	 */
	protected $product_brands_tax_name = 'product_brands';

	/**
	 * The rewrite rule.
	 *
	 * @var string $product_brands_rewrite_url
	 */
	protected $product_brands_rewrite_url = '^product/brand/(.*)/?$';

	/**
	 * ProductBrands initialization
	 *
	 * @return void
	 */
	public function init(){
		Action::add('init', $this->registerBrandsTaxonomy());
		// Action::add('init', $this->registerBrandsRewrite());
		// Action::add('wp_loaded', $this->rewriteFlushRules());

	}

	/**
	 * Registers the product taxonomy brand for WooCommerce
	 *
	 * @return void
	 */
	private function registerBrandsTaxonomy(){
		global $woocommerce;
		$product_brand = Taxonomy::make($this->product_brands_tax_name, 'product', 'Brands', 'Brand')->set([
			'public' => 'true',
			'rewrite' => [
				'slug' => 'product-brands',
			],
			'query_var' => false,
			'hierarchical' => true,
			'show_tagcloud' => false, 
			'show_in_rest' => true,
			'rest_base' => 'brands',
			'rest_contoller_class' => 'WP_REST_Terms_Controller',
		]);

		$product_brand->addFields([
			Field::media('thumbnail', [
				'title' => 'Brand Thumbnail',
				'type' => ['image']
			]),
			// $this->buildAttribtesField(),
		]);


		$product_brand->bind();
	}

	/**
	 * Builds the list for filters according to present attributes field
	 *
	 * @return Themosis\Facades\Field;
	 */
	private function buildAttribtesField(){
		$product_attributes = wc_get_attribute_taxonomies();
		$product_attributes_option = [];

		foreach($product_attributes as $product_attribute){
			$product_attributes_option[$product_attribute->attribute_id] = $product_attribute->attribute_label;
		}
		$attributes = Field::select( 'attributes',
			[
				$product_attributes_option
			],
			[
				'title' => 'Filters.',
				'description' => 'Associate product attributes here for filtering later on.'
			],
			[
				'multiple'
			]
		);

		return $attributes;
	}

	// /**
	//  * Registers the rewrite tag and rewrite url
	//  * 
	//  * @return void
	//  */
	// private function registerBrandsRewrite(){
	// 	add_rewrite_tag("%{$this->product_brands_tax_name}%", '([^&]+)');
	// 	add_rewrite_tag("%product_cat%", '([^&]+)');
	// 	// add_rewrite_rule($this->product_brands_rewrite_url, 'index.php?post_type=product&' . $this->product_brands_tax_name . '=$matches[1]', 'top');
	// 	add_rewrite_rule('^product/type/(.*)/?$', 'index.php?post_type=product&product_cat=$matches[1]', 'top');

	// }

	// /**
	//  * Flushes the rewrite rules if our rewrite rule is not yet defined
	//  *
	//  * @return void
	//  */

	// private function rewriteFlushRules(){
	// 	$rules = get_option( 'rewrite_rules' );

	// 	if ( ! isset( $rules[$this->product_brands_rewrite_url] ) ) {
	// 		global $wp_rewrite;
	// 	   	$wp_rewrite->flush_rules();
	// 	}
	// }

}	
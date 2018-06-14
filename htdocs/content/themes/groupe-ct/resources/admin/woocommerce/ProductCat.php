<?php 
namespace Theme\WooCommerce;

use Themosis\Facades\Action;

class ProductCat{
	/**
	 * The taxonomy name for brands
	 *
	 * @var string $product_brands
	 */
	protected $product_cat_tax_name = 'product_cat';

	/**
	 * The rewrite rule.
	 *
	 * @var string $product_brands_rewrite_url
	 */
	protected $product_cat_rewrite_rule = '^product-category/?';

	/**
	 * ProductCat initialization
	 *
	 * @return void
	 */
	public function init(){
		// Action::add('init', $this->registerBrandsRewrite());
		// Action::add('wp_loaded', $this->rewriteFlushRules());
	}


	/**
	 * Registers the rewrite tag and rewrite url
	 * 
	 * @return void
	 */
	public function registerBrandsRewrite(){
		add_rewrite_tag("%{$this->product_cat_tax_name}_archive%", '([^&]+)');
		// add_rewrite_tag("%product_cat%", '([^&]+)');
		add_rewrite_rule('^product-category/?', 'index.php?product_cat_archive=all', 'top');
	}

	/**
	 * Flushes the rewrite rules if our rewrite rule is not yet defined
	 *
	 * @return void
	 */

	private function rewriteFlushRules(){
		$rules = get_option( 'rewrite_rules' );

		if ( ! isset( $rules[$this->product_cat_rewrite_rule] ) ) {
			global $wp_rewrite;
		   	$wp_rewrite->flush_rules();
		}
	}
}
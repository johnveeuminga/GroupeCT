<?php 

namespace Theme\Models;

class ProductType{
	/**
	 * Finds a product type using a slug.
	 */
	public static function findProductType($product_cat){
		$product_type = get_terms( [
			'taxonomy' => 'product_cat',
			'slug' => $product_cat,
		] );

		return $product_type[0];
	}

	/**
	 * Gets all subcategories for the product type.
	 */
	public static function getSubcategories($product_cat){
		$product_types = get_terms([
			'taxonomy' => 'product_cat',
			'parent' => $product_cat,
			'hide_empty' => false,
		]);

		return $product_types;
	}

	/**
	 * Lists all product categories
	 */
	public static function getProductsWithBrandType(){
		return true;
	}
}
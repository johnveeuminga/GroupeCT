<?php 

namespace Theme\Models;

class Brand{
	/**
	 * Finds all brands.
	 */
	public static function all(){
		$brands = get_terms([
			'taxonomy' => 'product_brands',
			'hide_empty' => false,

		]);

		return $brands;
	}
	/**
	 * Finds a brand using a slug.
	 */
	public static function findBrand($brand_name){
		$brand = get_terms( [
			'taxonomy' => 'product_brands',
			'slug' => $brand_name,
		] );

		return $brand[0];
	}

	/**
	 * Gets a brand logo
	 */
	public static function getBrandLogo($brand_id){
		$logo = get_term_meta($brand_id, 'thumbnail', true);
		$logo_url = wp_get_attachment_url($logo != 0 ? $logo : 1991);

		return $logo_url;
	}
}
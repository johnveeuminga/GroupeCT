<?php
	
namespace Theme\Models;

use WP_Query;

class WooProduct{
	/**
	 * Gets all products
	 * 
	 * @return array
	 */
	public static function all() {
		$query = new WP_Query([
			'post_type' => 'product',
			'orderby'	=> 'title',
			'order'		=> 'ASC',
			'hide_empty' => false,
			'posts_per_page' => -1,
		]);

		return $query->get_posts();
	}

	public static function getProductsWithBrandAndType($brand_id, $type_id){
		$query = new WP_Query([
			'post_type' => 'product',
			'orderby'	=> 'title',
			'order'		=> 'ASC',
			'tax_query' => [
				'relation' => 'AND',
				[
					'taxonomy' => 'product_cat',
					'field' => 'term_id',
					'terms' => $type_id
				],
				[
					'taxonomy' => 'product_brands',
					'field' => 'term_id',
					'terms' => $brand_id,
				]
			]
		]);

		return $query->get_posts();

	}

	public static function getProductsOfCategory($type_id){
		$query = new WP_Query([
			'post_type' => 'product',
			'orderby'	=> 'title',
			'order'		=> 'ASC',
			'tax_query' => [
				'relation' => 'AND',
				[
					'taxonomy' => 'product_cat',
					'field' => 'term_id',
					'terms' => $type_id
				],
			]
		]);

		return $query->get_posts();
	}
}
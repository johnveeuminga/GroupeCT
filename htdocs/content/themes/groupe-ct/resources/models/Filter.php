<?php 

namespace Theme\Models;

class Filter{

	/**
	 * Gets all the filters
	 * 
	 * @param int $product_cat_id
	 * 
	 * @return array Array of filters
	 */
	public static function getFilters($product_cat_id){
		$filters_meta = get_term_meta($product_cat_id, 'product-cat-filters');
		$filters = [];
		foreach($filters_meta as $filter){
			$taxonomy = (get_taxonomy("pa_" . $filter));
			$filters[$taxonomy->labels->singular_name] = get_terms($taxonomy->name, ['hide_empty' => false]);
		}

		return $filters;
	}
}
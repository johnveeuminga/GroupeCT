<?php 
namespace Theme\Controllers;
use Theme\Models\Filter;
use WP_REST_Response;

class FilterController{
	/**
	 * Lists all filters.
	 */
	public function getFilters($product_cat = null){
		$filters = Filter::getFiltersAPI($product_cat);

		return json_encode(new WP_REST_Response($filters));
	}
}
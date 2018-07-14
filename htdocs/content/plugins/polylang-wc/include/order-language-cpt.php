<?php

/**
 * Setups the order languages model when orders are managed with a custom post type
 *
 * @since 1.0
 */
class PLLWC_Order_Language_CPT extends PLLWC_Object_Language_CPT {

	/**
	 * Add filters
	 *
	 * @since 1.0
	 */
	public function init() {
		add_filter( 'pll_get_post_types', array( $this, 'translated_post_types' ), 10, 2 );
	}

	/**
	 * Add orders to translated post types
	 *
	 * @since 1.0
	 *
	 * @param array $types List of post type names for which Polylang manages language and translations
	 * @param bool  $hide  True when displaying the list in Polylang settings
	 * @return array List of post type names for which Polylang manages language and translations
	 */
	public function translated_post_types( $types, $hide ) {
		$woo_types = array( 'shop_order' );
		return $hide ? array_diff( $types, $woo_types ) : array_merge( $types, $woo_types );
	}
}

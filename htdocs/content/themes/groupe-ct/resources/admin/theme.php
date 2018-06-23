<?php

use Theme\WooCommerce\ProductBrands;
use Theme\WooCommerce\ProductFilters;
use Theme\WooCommerce\ProductCat;
use Theme\WooCommerce\FilterCheckbox;

/**
 * Define your theme custom code.
 */

/**
 * Register Product Brands Custom post type
 */
$product_brands = new ProductBrands();
$product_brands->init();

$product_filters = new ProductFilters();
$product_filters->init();

$product_cat = new ProductCat();
$product_cat->init();

// $filter_checkbox = new FilterCheckbox();
// $filter_checkbox->init();

<?php 

namespace Theme\Controllers;

use Route;
use Theme\Controllers\MainController;
use Theme\Models\Brand;
use Theme\Models\Filter;
use Theme\Models\ProductType;
use Theme\Models\WooProduct as Product;
use Themosis\Facades\Asset;

class ProductController extends MainController{
	/**
	 * Enqueues assets from MainController
	 *
	 * @return void
	 */
	public function __construct(){
		parent::__construct();
	}

	/**
	 * Displays the products under a product type and product brand
	 */
	public function getProductsWithBrandType(){
		$brand = get_queried_object();
		$brands = Brand::all();
		$brand_logo = Brand::getBrandLogo($brand->term_id);
		$product_type = ProductType::findProductType('printers');
		$product_type_children = ProductType::getSubcategories($product_type->term_id);
		$products = Product::getProductsWithBrandAndType($brand->term_id, $product_type->term_id);
		$filters = Filter::getFilters($product_type->term_id);
		$page_title = __($brand->name. ' ' . $product_type->name);

		return view('pages.woocommerce.product-listing',[
			'brand' => $brand,
			'brands' => $brands,
			'filters'	=> $filters,
			'product_type_children' => $product_type_children,
			'brand_logo' => $brand_logo,
			'product_type' => $product_type,
			'products' => $products,
			'page_title' => $page_title,
		]);
	}

	/**
	 * Displays a single product
	 *
	 * @return void
	 */
	public function single($post){
		$product = wc_get_product($post->ID);
		$product_types = get_the_terms($post->ID, 'product_cat'); 
		$product_brand = get_the_terms($post->ID, 'product_brands');
		$product_types_name = [];
		foreach($product_types as $index=>$product_type){
			if($product_type->parent == 264 ){
				$product_types_name[] = __($product_type->name, 'GROUPE-CT');
			}else{
				unset($product_types[$index]);
			}
		}

		$product_types = array_values($product_types);
		return view('pages.woocommerce.single', [
			'product' => $product,
			'product_types' => $product_types,
			'product_types_name' => $product_types_name,
			'product_brand' => $product_brand[0] ?? null,
		]);
	}

//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css
	/**
	 * Displays a listing of all the product subcategories
	 *
	 * @return void
	 */
	public function productSubCat($product_type){
		$brands = Brand::all();
		$product_type = ProductType::findProductType($product_type);
		$product_type_children = ProductType::getSubcategories($product_type->term_id);
		$page_title = __($product_type->name . ' Categories', 'GROUPE-CT');
		return view('pages.woocommerce.product_cat_listing', [
			'product_types' => $product_type_children,
			'brands' => $brands,
			'page_title' => $page_title,
		]);
	}
}
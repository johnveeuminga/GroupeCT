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
	 * The product brand taxonomy name.
	 *
	 * @var string $product_brand_tax_name;
	 */
	protected $product_brand_tax_name = 'product_brands';

	/**
	 * The product category taxonomy name.
	 *
	 * @var string $product_cat_tax_name
	 */
	protected $product_cat_tax_name = 'product_cat';

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
		$object = get_queried_object();
		$brands = Brand::all();
		$product_type = ProductType::findProductType('printers');
		$product_type_children = ProductType::getSubcategories($product_type->term_id);
		if($object->taxonomy === $this->product_brand_tax_name){
			$products = Product::getProductsWithBrandAndType($object->term_id, $product_type->term_id);
		}else{
			$products = Product::getProductsOfCategory($object->term_id);
		}
		$filters = Filter::getFilters($product_type->term_id);

		return view('pages.woocommerce.product-listing',[
			'object' => $object,
			'brands' => $brands,
			'filters'	=> $filters,
			'product_type_children' => $product_type_children,
			'logo' => $this->getLogo($object),
			'product_type' => $product_type,
			'products' => $products,
			'page_title' => $this->getTitle($object, $product_type),
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

	/**
	 * Gets the page title according to if its a brand or a category
	 *
	 * @return string The corresponding page title.
	 */
	private function getTitle($object, $product_type = null){
		if($object->taxonomy === $this->product_brand_tax_name){
			return __($object->name. ' ' . $product_type->name, 'GROUPE-CT');
		}


		return __($object->name, 'GROUPE-CT');
	}

	/**
	 * Gets the brand or category logo
	 *
	 * @return string The logo url.
	 */
	private function getLogo($object){
		if($object->taxonomy === $this->product_brand_tax_name){
			return Brand::getBrandLogo($object->term_id);
		}

		$thumbnail_id = get_woocommerce_term_meta( $object->term_id, 'thumbnail_id', true );
		$image = wp_get_attachment_url( $thumbnail_id != 0 ? $thumbnail_id : 1991 );

		return $image;
	}

}
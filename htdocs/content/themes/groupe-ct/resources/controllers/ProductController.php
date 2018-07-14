<?php 

namespace Theme\Controllers;

use Route;
use Theme\Controllers\MainController;
use Theme\Models\Brand;
use Theme\Models\Filter;
use Theme\Models\ProductType;
use Theme\Models\WooProduct as Product;
use Themosis\Facades\Asset;
use Themosis\Facades\View;
use WooCommerce\ProductAttributeGroup\Models\ProductAttributeGrouping;

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

	/**
	 * The current object.
	 *
	 * @var mixed $object
	 */
	protected $object;

	/**
	 * The printers product type
	 *
	 * @var mixed $printers_product
	 */
	protected $printers_product_cat;

	/**
	 * The brands.
	 *
	 * @var mixed $brands
	 */
	protected $brands;

	/**
	 * The filters
	 *
	 * @var mixed $filters
	 */
	public function __construct(){
		parent::__construct();
		$this->object = get_queried_object();
		$this->brands = Brand::all();
		$this->filters = Filter::getFilters($this->printers_product_cat->term_id);
		if(is_tax()){
			View::share('object', $this->object);
			View::share('active_link', $this->object->slug);
		}
		View::share('brands', $this->brands);
		View::share('product_type', $this->printers_product_cat);
		View::share('filters', $this->filters);
	}

	/**
	 * Displays the products under a product type and product brand
	 */
	public function getProductsWithBrandType(){
		$product_type_children = ProductType::getSubcategories($this->printers_product_cat->term_id);

		if($this->object->taxonomy === $this->product_brand_tax_name){
			$products = Product::getProductsWithBrandAndType($this->object->term_id, 
			$this->printers_product_cat->term_id);
			$tax_route = 'product-brands';
		}else{
			$products = Product::getProductsOfCategory($this->object->term_id);
			$tax_route = 'product-categories';
		}

		return view('pages.woocommerce.product-listing',[
			'product_type_children' => $product_type_children,
			'logo' => $this->getLogo($this->object),
			'page_title' => $this->getTitle($this->object, $this->printers_product_cat),
			'products' => $products,
			'tax_route'	=> $tax_route,
		]);
	}

	/**
	 * Displays a single product
	 *
	 * @return void
	 */
	public function single($post){
		global $product;
		$product_attribute_groups = ProductAttributeGrouping::all()
									->groupBy('productattrgroup_id');
		$product = wc_get_product($post->ID);
		$product_types = get_the_terms($post->ID, 'product_cat'); 
		$product_brand = get_the_terms($post->ID, 'product_brands');
		$product_types_name = [];
		foreach($product_types as $index=>$product_type){
			if($product_type->parent == 264 || $product_type->parent == 442){
				$product_types_name[] = __($product_type->name, 'GROUPE-CT');
			}else{
				unset($product_types[$index]);
			}
		}

		$previous = null;
		if(isset($_SERVER['HTTP_REFERER'])) {
		    $previous = $_SERVER['HTTP_REFERER'];
		}

		$product_types = array_values($product_types);
		return view('pages.woocommerce.single', [
			'product' => $product,
			'product_types_single' => $product_types,
			'product_types_name_single' => $product_types_name,
			'product_brand' => $product_brand[0] ?? null,
			'previous' => $previous,
			'product_attribute_groups' => $product_attribute_groups
		]);
	}

	/**
	 * Displays a listing of all the product subcategories
	 *
	 * @return void
	 */
	public function productSubCat($product_type = false){
		$product_type_children = ProductType::getSubcategories($this->printers_product_cat->term_id);
		$page_title = pll__("CATÉGORIES DES PRODUITS D'IMPRESSION", GROUPE_CT);
		return view('pages.woocommerce.product_cat_listing', [
			'product_types' => $product_type_children,
			'page_title' => $page_title,
			'tax_listing'	=> true,
			'tax_route'		=> 'product-categories'
		]);
	}

	/**
	 * Displays a listing of the brands
	 *
	 * @return \Illuminate\Routing\view
	 */
	public function getProductBrands(){
		$product_type_children = ProductType::getSubcategories($this->printers_product_cat->term_id);
		$page_title = pll__("MARQUES DES PRODUITS D'IMPRESSION", GROUPE_CT);
		return view('pages.woocommerce.product-brand-listing',[
			'product_types' => $product_type_children,
			'page_title' => $page_title,
			'tax_listing'	=> true,
			'tax_route'		=> 'product-categories'
		]);
	}

	/**
	 * Displays a listing of all products
	 *
	 * @return \Illuminate\Routing\view
	 */
	public function getAllProducts() {
		global $post;
		$products = Product::all();
	
		$product_type_children = ProductType::getSubcategories($this->printers_product_cat->term_id);
		$page_title = $post->post_title;
		return view('pages.woocommerce.product-archive',[
			'product_type_children' => $product_type_children,
			'products' => $products,
			'page_title'	=> $page_title,
		]);
	}

	/**
	 * Gets the page title according to if its a brand or a category
	 *
 * @return string The corresponding page title.
	 */
	private function getTitle($object, $product_type = null){
		if($object->taxonomy === $this->product_brand_tax_name){
			return __( $product_type->name . ' '  . $object->name , 'GROUPE-CT');
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

	public function productTaxListing() {
		global $post;

		if( $post->ID == 2176 || $post->ID == 2179 ) {
			return $this->getProductBrands();
		}else {
			return $this->productSubCat();
		}
	}
}
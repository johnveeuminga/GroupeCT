<?php

namespace Theme\Controllers;

use Theme\Models\Brand;
use Theme\Models\ProductType;
use Themosis\Facades\Asset;
use Themosis\Facades\View;
use Themosis\Route\BaseController;
class MainController extends BaseController
{
    /**
     * All the Product Types
     *
     * @var mixed $product_types;
     */
    protected $product_types; 

    /**
     * The printer product cat
     *
     * @var mixed $product_types;
     */
    protected $printers_product_cat;

    /**
     * The brands
     *
     * @var mixed $brands;
     */
    protected $brands;

    public function __construct()
    {
        $this->printers_product_cat =  ProductType::findProductType('printers');
        $this->product_types = ProductType::getSubcategories($this->printers_product_cat->term_id);
        $this->brands = Brand::all();

        Asset::add('jquery', '//code.jquery.com/jquery-3.1.1.min.js', '3.1.1', true);
        Asset::add('screen-css', themosis_assets() . '/css/screen.min.css', ['flexgrid']);
        Asset::add('theme-js',  themosis_assets() . '/js/theme.min.js', ['jquery', 'doughnut-chart'], '', false);

        //Asset::add('mmenu-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/6.1.0/jquery.mmenu.js', '1.0.0', true);

        //Asset::add('mmenu-css', themosis_assets() . '/css/jquery.mmenu.css', '',true);
        //Asset::add('mmenu-js',  themosis_assets() . '/js/jquery.mmenu.js', ['jquery'], '', true);


        Asset::add('validate-js', '//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js', ['jquery'],'1.16.0', true);
        Asset::add('validate-method-js', '//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/additional-methods.min.js', ['jquery'],'1.16.0', true);
        Asset::add('validate-translation-js',  themosis_assets() . '/js/jquery.validate.translations.fr-FR.js', ['validate-js'], '', false);
        Asset::add('form-validation-js',  themosis_assets() . '/js/form-validation.js', ['validate-js'], '', false);


        Asset::add('flexgrid', '//cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css', [], '1.0', true);
        Asset::add('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', false, '4.7.0', true);
        Asset::add('font-awesome-js', '//use.fontawesome.com/releases/v5.0.13/js/all.js', false, '5.0.13', true);

        Asset::add('charts-js', '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js', ['jquery'], '2.5.0', false);
        Asset::add('doughnut-chart',  themosis_assets() . '/js/doughnut-chart.js', ['charts-js'], '', false);

        Asset::add('lity-css', themosis_assets() . '/css/lity.min.css');
        Asset::add('lity-js',  themosis_assets() . '/js/lity.min.js', ['jquery'], '', false);

        Asset::add('slick-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.css');
        Asset::add('slick-js', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', ['jquery'], '1.9.0', true);

        View::share('product_types', $this->product_types);
        View::share('product_cat', $this->printers_product_cat);
        View::share('brands', $this->brands);
    }

}




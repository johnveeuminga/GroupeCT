<?php 
function is_product_brand(){
    if(get_query_var('product_brands_archive')){
        return true;
    }
    return false;
}

function is_product_cat_archive(){
    if(get_query_var('product_cat_archive')){
        return true;
    }
    return false;
}
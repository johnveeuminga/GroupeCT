<?php

namespace Theme\Models;
use Themosis\Metabox\Meta;
use WP_Query;

/**
 * Class Product.
 * Help you retrieve data from your $prefix_posts table.
 *
 * @package Theme\Models
 */
class Product
{

	public static function all($hydrate = true)
	{
		return self::first(-1, $hydrate);

	}

	public static function first($nb = 1, $hydrate = true)
	{
		$query = new WP_Query([
			'post_type'         => 'product',
			'posts_per_page'    => $nb,
			'post_status'       => 'publish',
			'orderby' => 'post_title',
			'order' => 'ASC'
		]);
		$products = $query->get_posts();
		if ($hydrate)
		{
			$products = self::hydrate($products);
		}
		return $products;

	}


	public static function hydrate($products)
	{
		foreach ($products as $product)
		{
			$product->image = ['url' => get_the_post_thumbnail_url($product, 'full'), 'alt' => get_the_post_thumbnail_caption($product)];
			$product->description = get_post_meta($product->ID, 'product_description')[0];
			$product->brochure = wp_get_attachment_url(get_post_meta($product->ID, 'product_pdf')[0]);

		}

		return $products;
	}

}

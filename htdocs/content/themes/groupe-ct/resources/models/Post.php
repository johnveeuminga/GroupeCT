<?php

namespace Theme\Models;
use Themosis\Metabox\Meta;
use WP_Query;

/**
 * Class Post.
 * Help you retrieve data from your $prefix_posts table.
 *
 * @package Theme\Models
 */
class Post
{

	public static function all($hydrate = true)
	{
		return self::first(-1, $hydrate);

	}

	public static function get($id, $hydrate = true)
	{

		return self::first(-1, $hydrate);

	}

	public static function first($nb = 1, $hydrate = true)
	{
		$query = new WP_Query([
			'post_type'         => 'post',
			'posts_per_page'    => $nb,
			'post_status'       => 'publish',
			'orderby' => 'post_title',
			'order' => 'ASC'
		]);
		$posts = $query->get_posts();
		if ($hydrate)
		{
			$posts = self::hydrate($posts);
		}
		return $posts;

	}


	public static function hydrate($posts)
	{
		foreach ($posts as $post)
		{
			$post->image = ['url' => get_the_post_thumbnail_url($post, 'full'), 'alt' => get_the_post_thumbnail_caption($post)];
			$post->category = get_the_category($post->ID)[0]->name;
			$post->excerpt = get_post_meta($post->ID, 'excerpt');
			$post->permalink = get_permalink($post->ID);
		}

		return $posts;
	}

    public static function get_featured()
    {
        $meta_query[] = array(
            'key'     => 'post_is_featured',
            'value'   => true,
        );

        $args = [
            'post_type' => 'post',
            'numberposts'	=> 2,
            'meta_query' => $meta_query,
        ];

        $query = new \WP_Query($args);

        return $query->get_posts();
    }

    public static function get_posts()
    {
        $args = [
            'post_type' => 'post',
            'posts_per_page' => -1,
        ];

        if (isset($_GET['cat']))  {
            $args['tax_query'] = [[
                                    'taxonomy' => 'category',
                                    'field'    => 'term_id',
                                    'terms'    => $_GET['cat'],
                                    'operator' => 'IN',
                                ]];
        }

        $query = new \WP_Query($args);
        $count = $query->post_count;

        $args = [
            'post_type' => 'post',
            'posts_per_page' => 10,
            'paged' => get_query_var( 'paged' ),
        ];

        if (isset($_GET['cat']))  {
            $args['cat'] = $_GET['cat'];
        }

        $query = new \WP_Query($args);


        return [
            'count' => $count / 10,
            'posts' => $query->get_posts(),
        ];
    }

    public static function get_3_suggested()
    {
        $category = get_the_category(get_the_ID());
        $posts_ids = [get_the_ID()];

        $args = [
            'post_type' => 'post',
            'posts_per_page' => 3,
            'post__not_in' => $posts_ids,
        ];

        if ($category) {
            $args['tax_query'] = [[
                'taxonomy' => 'category',
                'field'    => 'term_id',
                'terms'    => $category[0]->term_id,
                'operator' => 'IN',
            ]];
        }

        $query = new \WP_Query($args);

        $posts = $query->posts;
        if (count($posts) >= 3) {
            return $query->posts;
        }

        foreach ($query->posts as $post) {
            $posts_ids[] = $post->ID;
        }

        $args = [
            'post_type' => 'post',
            'posts_per_page' => 3,
            'post__not_in' => $posts_ids,
        ];
        $query = new \WP_Query($args);

        return array_merge($posts, $query->posts);
    }

}

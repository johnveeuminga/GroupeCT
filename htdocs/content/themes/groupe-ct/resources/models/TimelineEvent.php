<?php

namespace Theme\Models;
use Themosis\Metabox\Meta;
use WP_Query;

/**
 * Class TimelineEvent.
 * Help you retrieve data from your $prefix_posts table.
 *
 * @package Theme\Models
 */
class TimelineEvent
{

	public static function all($hydrate = true, $order = 'ASC')
	{
		return self::first(-1, $hydrate, $order);

	}

	public static function first($nb = 1, $hydrate = true, $order = 'ASC')
	{
		$query = new WP_Query([
			'post_type'         => 'timeline_event',
			'posts_per_page'    => $nb,
			'post_status'       => 'publish',
			'order' => $order
		]);
		$events = $query->get_posts();
		if ($hydrate)
		{
			$events = self::hydrate($events);
		}
		return $events;

	}


	public static function hydrate($events)
	{
		foreach ($events as $event)
		{

		}

		return $events;
	}

}

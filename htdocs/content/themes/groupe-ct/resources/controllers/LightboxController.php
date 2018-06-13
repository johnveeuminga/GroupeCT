<?php
/**
 * Created by PhpStorm.
 * User: daniel
 * Date: 17-06-24
 * Time: 14:02
 */

namespace Theme\Controllers;

use Themosis\Facades\Asset;

class LightboxController {


	public function job_offer($post)
	{
		Asset::add('select2-css', '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css', false, '4.0.3', true);
		Asset::add('screen-css', themosis_assets() . '/css/screen.min.css', ['select2-css']);

		return view('partials.components.job-offer.lightbox',['post' => $post]);
	}

}
<?php
/*
    Plugin Name: Groupe CT Fields
    Plugin URI: http://www.ctrlweb.ca
    Description: Requires ACF Pro; handle all custom fields.
    Author: Michael Villeneuve
    Version: 1.0
    Author URI: http://www.ctrlweb.ca
    */

if ( ! defined( 'WPINC' ) ) {
    die;
}

require_once plugin_dir_path( __FILE__ ) . 'LegoBuilder.php';

$builder = new LegoBuilder();
$builder->run();


<?php
/**
 * /*
 * Plugin Name: my first plugin
 * Description: This is my first plugin!!!
 * Version: 1.0.0
 * Author: saleh mohammadi
 * License: GPLv2 or later
 */

defined("ABSPATH") or die();
if (file_exists(dirname(__FILE__) . "/vendor/autoload.php")) {
    require_once dirname(__FILE__) . "/vendor/autoload.php";
}
use Inc\Base\Activate;
use Inc\Base\Deactivate;

function my_plugin_activate()
{
Activate::activate();
}

function my_plugin_deactivate()
{
Deactivate::deactivate();
}

define("PLUGIN_URL", plugin_dir_url(__FILE__));
define("PLUGIN_DIR", plugin_dir_path(__FILE__));
if (class_exists('Inc\\Init')) {
    Inc\Init::register_services();
}
<?php
/**
 * TrueMarkdown-WP
 *
 * AFter my own searching leading to futile efforts, I have stepped in to create
 * a proper solution to Markdown in Wordpress.
 *
 * @package   TrueMarkdown-WP
 * @author    Paul (iamunr) Morrison <paul.unr@gmail.com>
 * @license   GPL-2.0+
 * @link      http://iamunr.com/truemarkdown
 * @copyright 2013 Paul Morrison
 *
 * @wordpress-plugin
 * Plugin Name: TrueMarkdown-WP
 * Plugin URI:  http://iamunr.com/truemarkdown
 * Description: Enables markdown the correct way.
 * Version:     0.0.1
 * Author:      Paul (iamunr) Morrison
 * Author URI:  http://iamunr.com
 * Text Domain: truemarkdown-wp
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /lang
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require_once( plugin_dir_path( __FILE__ ) . 'class-truemarkdown-wp.php' );

// Register hooks that are fired when the plugin is activated, deactivated, and uninstalled, respectively.
register_activation_hook( __FILE__, array( 'TrueMarkdown', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'TrueMarkdown', 'deactivate' ) );

// TODO: replace PluginName with the name of the plugin defined in `class-plugin-name.php`
TrueMarkdown::get_instance();

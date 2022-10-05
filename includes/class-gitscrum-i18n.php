<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/gitscrum-team/gitscrum-wordpress-plugin
 * @since      1.0.0
 *
 * @package    Gitscrum
 * @subpackage Gitscrum/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Gitscrum
 * @subpackage Gitscrum/includes
 * @author     GitScrum <customer.service@gitscrum.com>
 */
class Gitscrum_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'gitscrum',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}

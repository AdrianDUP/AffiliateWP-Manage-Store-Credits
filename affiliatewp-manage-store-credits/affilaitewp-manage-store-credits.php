<?php

/**
 * Plugin Name: AffiliateWP Manage Store Credits
 * Plugin URI: https://github.com/Jogger71/AffiliateWP-Manage-Store-Credits
 * Author: Adrian Du Plessis
 * Author URI: https://github.com/Jogger71/
 *
 * Description: A lightweight plugin that allows you to manage the amounts of store credits of your affiliates. It also incorporates the AffiliateWP Store Credits Display Plugin
 *
 * Version: 0.0.0
 */

if ( ! defined('ABSPATH')) {
	exit('Cheaters Detected!');
}

if (!class_exists('AWP_Manage_Store_Credits')) {
	class AWP_Manage_Store_Credits {

		/**
		 * @var AWP_Manage_Store_Credits $instance Instance of the plugin
		 * @since 1.0.0
		 */
		private static $instance;

		/**
		 * Main Class initialiser
		 *
		 * @since 1.0.0
		 */
		public static function instance() {
			if (!isset(self::$instance) && !(self::$instance instanceof AWP_Manage_Store_Credits)) {
				self::$instance = new AWP_Manage_Store_Credits;
			}

			self::$instance->set_constants();

			return self::$instance;
		}

		/**
		 * Setup all the needed constant variables for the plugin
		 *
		 * @access private
		 * @since 1.0.0
		 */
		private function set_constants() {
			if ( ! defined('AWP_MSC_PLUGIN_LOCATION') ) {
				define('AWP_MSC_PLUGIN_LOCATION', dirname(__FILE__));
			}
		}
	}
}
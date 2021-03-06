<?php
/**
 * Plugin Name: Clickpublish Blocks
 * Version: 1.0.0
 *
 * @Author: Timi Wahalahti
 * @Date:   2021-08-04 15:30:36
 * @Last Modified by:   Timi Wahalahti
 * @Last Modified time: 2021-08-12 21:26:43
 */

// namespace Clickpublish_Blocks;

if ( ! defined( 'ABSPATH' ) ) {
  exit();
}

require_once plugin_dir_path( __FILE__ ) . '/blocks/clickpublish-attendees.php';
require_once plugin_dir_path( __FILE__ ) . '/blocks/clickpublish-accomplished.php';
require_once plugin_dir_path( __FILE__ ) . '/blocks/clickpublish-newsletter.php';

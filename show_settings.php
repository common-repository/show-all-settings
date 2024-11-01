<?php
/**
 * @package ShowAllSetting
 * @version 1.0
 */
/*
Plugin Name: Show All Settings
Plugin URI: 
Description:  This plugin allows you to show all settings when some one clicks on "All Settings" in "Settings."
Author: Fahad Uddin
Version: 1.0
Author URI: http://www.fahaduddin.com
*/

// CUSTOM ADMIN MENU LINK FOR ALL SETTINGS
   function all_settings_link() {
    add_options_page(__('All Settings'), __('All Settings'), 'administrator', 'options.php');
   }
   add_action('admin_menu', 'all_settings_link');
?>

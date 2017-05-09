<?php
/**
 * Open Source Social Network
 *
 * @package   (Informatikon.com).ossn
 * @author    OSSN Core Team <info@opensource-socialnetwork.org>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */
 
define(THEMER, elgg_get_plugins_path() . 'themer/');

require_once(THEMER . 'classes/Themer.php');

$themer = new Themer;
global $Themer;
$Themer = $themer->getSettings();

function themer_init() {
		global $Themer;
		if(isset($Themer->menumore) && $Themer->menumore == 'enable'){
        	elgg_unregister_plugin_hook_handler('prepare', 'menu:site', '_elgg_site_menu_setup');	
		}
		elgg_register_action('themer/save', THEMER . 'actions/save.php', 'admin');
		elgg_register_action('themer/reset', THEMER . 'actions/reset.php', 'admin');
		elgg_register_admin_menu_item('administer', 'themer', 'administer_utilities');
}

elgg_register_event_handler('init', 'system', 'themer_init');

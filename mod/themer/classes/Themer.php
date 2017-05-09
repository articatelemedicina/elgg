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
class Themer {
		/**
		 * Initilize Attributes
		 *
		 * @return void;
		 */
		public function initAttributes() {
				$this->themer = elgg_get_plugin_from_id('themer');
		}
		/**
		 * Set default fields
		 *
		 * @return array;
		 */
		public function Attrs() {
				return array(
						'header_color',
						'menubar_color',
						'topbar_color',
						'links_color',
						'site_color',
						'headings_color',
						'topbar_height',
						'header_height',
						'inner_color',
						'headerbg',
						'sitebg',
						'logo',
						'button_color',
						'topbar_links_color',
						'menubar_link_color',
						'tabs_color',
						'tabs_links_color',
						'tab_selected_color',
						'tab_selected_link_color',
						'notification_success_color',
						'notification_success_bgcolor',
						'notification_error_bgcolor',
						'notification_error_color',
						'menumore',
						'moremenu_color',
						'login_box_color',
						'footer_links_color'
				);
		}
		/**
		 * Set input values
		 *
		 * @access private;
		 * @return void;
		 */
		private function setVals() {
				if($this->Attrs()) {
						foreach($this->Attrs() as $type) {
								$attrs[$type] = get_input($type);
						}
						$this->attrs = $attrs;
				}
		}
		/**
		 * Save settings
		 *
		 * @access public;
		 * @return void;
		 */
		public function save() {
				self::initAttributes();
				$this->setVals();
				
				//find header background image
				if(isset($_FILES['header_bg']) && !empty($_FILES['header_bg']['tmp_name'])) {
						$file  = $_FILES['header_bg']['tmp_name'];
						$file  = get_resized_image_from_existing_file($file, 2500, 2500);
						$hfile = THEMER . 'images/header.jpg';
						file_put_contents($hfile, $file);
				}
				//find logo file		
				if(isset($_FILES['logo_file']) && !empty($_FILES['logo_file']['tmp_name'])) {
						$file  = $_FILES['logo_file']['tmp_name'];
						$file  = get_resized_image_from_existing_file($file, 2500, 2500);
						$hfile = THEMER . 'images/logo.jpg';
						file_put_contents($hfile, $file);
				}
				
				//find site background file		
				if(isset($_FILES['site_bg']) && !empty($_FILES['site_bg']['tmp_name'])) {
						$file  = $_FILES['site_bg']['tmp_name'];
						$file  = get_resized_image_from_existing_file($file, 2500, 2500);
						$hfile = THEMER . 'images/site.jpg';
						file_put_contents($hfile, $file);
				}
				if($this->attrs) {
						$val = json_encode($this->attrs);
						return $this->themer->setSetting('themer_basic', $val);
						
				}
				return false;
		}
		/**
		 * Get all themer settings
		 *
		 * @return false|object
		 */
		public function getSettings() {
				self::initAttributes();
				return json_decode($this->themer->getSetting('themer_basic'));
		}
		/**
		 * Reset themer settings
		 *
		 * @return boolean
		 */
		public function resetSettings() {
				self::initAttributes();
				return $this->themer->setSetting('themer_basic', '');
		}
}
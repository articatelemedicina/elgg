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
$themer = new Themer;
if($themer->resetSettings()){
	system_message('Successfully reverted settings');
} else {
	register_error("Cannot revert settings");
}
	forward(REFERER);
	//redirect(REF);

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
if($themer->save()){
	system_message('Successfully saved settings');
} else {
	register_error("Cannot save settings");
}
	forward(REFERER);
	//redirect(REF);


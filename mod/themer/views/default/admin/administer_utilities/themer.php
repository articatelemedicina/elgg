<p>Themer settings</p>
<link rel='stylesheet' href='<?php echo elgg_get_site_url();?>mod/themer/vendors/spectrum.css' />
<?php
	echo elgg_view_form('themer/save', array('action' => 'action/themer/save', 'enctype' => 'multipart/form-data'));
?>
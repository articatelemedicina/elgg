<?php
/**
 * Elgg header logo
 */
global $Themer;

$site = elgg_get_site_entity();
$site_name = $site->name;
$site_url = elgg_get_site_url();
?>
<h1>
	<?php if($Themer->logo == 'image'){ ?>
		<a class="elgg-heading-site" href="<?php echo $site_url; ?>">
			<img src="<?php echo elgg_get_site_url();?>mod/themer/images/logo.jpg" />
		</a>			
	<?php } else { ?>	
	<a class="elgg-heading-site" href="<?php echo $site_url; ?>">
		<?php echo $site_name; ?>
	</a>
    <?php } ?>
</h1>

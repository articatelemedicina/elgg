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
$settings = $themer->getSettings();

$reset = elgg_get_site_url().'action/themer/reset';
$reset = elgg_add_action_tokens_to_url($reset);
?>
<p><?php echo elgg_echo('themer:site:cache');?></p>
<table class="elgg-table">
  <tr>
    <th><?php echo elgg_echo('themer:name');?></th>
    <th><?php echo elgg_echo('themer:value');?></th>
    <th><?php echo elgg_echo('themer:extra');?></th>
  </tr>

  <tr>
    <td><?php echo elgg_echo('themer:header:color');?></td>
    <td><input type='text' id="header_color" class="custom" name="header_color" value="<?php echo $settings->header_color;?>"/></td>
    <td>
    	<input type="file" name="header_bg"/>
    </td>
  </tr>
  <tr>
    <td><?php echo elgg_echo('themer:menubar:bgcolor');?></td>
    <td><input type='text' id="menubar_color" class="custom" name="menubar_color" value="<?php echo $settings->menubar_color;?>"/></td>
    <td></td>
  </tr>  
  <tr>
    <td><?php echo elgg_echo('themer:topbar:bgcolor');?></td>
    <td><input type='text' id="topbar_color" class="custom" name="topbar_color" value="<?php echo $settings->topbar_color;?>"/></td>
    <td></td>
  </tr>
  <tr>
    <td><?php echo elgg_echo('themer:topbar:link:color');?></td>
    <td><input type='text' id="topbar_links_color" class="custom" name="topbar_links_color" value="<?php echo $settings->topbar_links_color;?>"/></td>
    <td></td>
  </tr>  
  <tr>
    <td><?php echo elgg_echo('themer:menubar:link:color');?></td>
    <td><input type='text' id="menubar_link_color" class="custom" name="menubar_link_color" value="<?php echo $settings->menubar_link_color;?>"/></td>
    <td></td>
  </tr>  
  <tr>
    <td><?php echo elgg_echo('themer:links:color');?></td>
    <td><input type='text' id="links_color" class="custom" name="links_color" value="<?php echo $settings->links_color;?>"/></td>
    <td></td>
  </tr>  
  <tr>
    <td><?php echo elgg_echo('themer:tabs:color');?></td>
    <td><input type='text' id="tabs_color" class="custom" name="tabs_color" value="<?php echo $settings->tabs_color;?>"/></td>
    <td></td>
  </tr>  
  <tr>
    <td><?php echo elgg_echo('themer:tabs:links:color');?></td>
    <td><input type='text' id="tabs_links_color" class="custom" name="tabs_links_color" value="<?php echo $settings->tabs_links_color;?>"/></td>
    <td></td>
  </tr>  

  <tr>
    <td><?php echo elgg_echo('themer:selected:tabs:color');?></td>
    <td><input type='text' id="tab_selected_color" class="custom" name="tab_selected_color" value="<?php echo $settings->tab_selected_color;?>"/></td>
    <td></td>
  </tr>  

  <tr>
    <td><?php echo elgg_echo('themer:selected:tabs:link:color');?></td>
    <td><input type='text' id="tab_selected_link_color" class="custom" name="tab_selected_link_color" value="<?php echo $settings->tab_selected_link_color;?>"/></td>
    <td></td>
  </tr>  

  <tr>
    <td><?php echo elgg_echo('themer:inner:page:bgcolor');?></td>
    <td><input type='text' id="inner_color" class="custom" name="inner_color" value="<?php echo $settings->inner_color;?>"/></td>
    <td></td>
  </tr>    
  
  <tr>
    <td><?php echo elgg_echo('themer:site:bgcolor');?></td>
    <td><input type='text' id="site_color" class="custom" name="site_color" value="<?php echo $settings->site_color;?>"/></td>
    <td><input type="file" name="site_bg"/></td>
  </tr>  
  <tr>
    <td><?php echo elgg_echo('themer:heading:color');?></td>
    <td><input type='text' id="headings_color" class="custom" placeholder="60" name="headings_color" value="<?php echo $settings->headings_color;?>"/></td>
   	<td></td>
  </tr>   
  <tr>
    <td><?php echo elgg_echo('themer:submit:button:color');?></td>
    <td><input type='text' class="custom" id="button_color" name="button_color" value="<?php echo $settings->button_color;?>"/></td>
   	<td></td>    
  </tr>       

  <tr>
    <td><?php echo elgg_echo('themer:success:notification:color');?></td>
    <td><input type='text' class="custom" id="notification_success_color" name="notification_success_color" value="<?php echo $settings->notification_success_color;?>"/></td>
   	<td></td>    
  </tr>    

  <tr>
    <td><?php echo elgg_echo('themer:success:notification:bgcolor');?></td>
    <td><input type='text' class="custom" id="notification_success_bgcolor" name="notification_success_bgcolor" value="<?php echo $settings->notification_success_bgcolor;?>"/></td>
   	<td></td>    
  </tr>    
 
  <tr>
    <td><?php echo elgg_echo('themer:error:notification:color');?></td>
    <td><input type='text' class="custom" id="notification_error_color" name="notification_error_color" value="<?php echo $settings->notification_error_color;?>"/></td>
   	<td></td>    
  </tr>    

  <tr>
    <td><?php echo elgg_echo('themer:error:notification:bgcolor');?></td>
    <td><input type='text' class="custom" id="notification_error_bgcolor" name="notification_error_bgcolor" value="<?php echo $settings->notification_error_bgcolor;?>"/></td>
   	<td></td>    
  </tr>    
  
  <tr>
    <td><?php echo elgg_echo('themer:more:menu:color');?></td>
    <td><input type='text' class="custom" id="moremenu_color" name="moremenu_color" value="<?php echo $settings->moremenu_color;?>"/></td>
   	<td></td>    
  </tr>  

  <tr>
    <td><?php echo elgg_echo('themer:login:box:color');?></td>
    <td><input type='text' class="custom" id="login_box_color" name="login_box_color" value="<?php echo $settings->login_box_color;?>"/></td>
   	<td></td>    
  </tr>    
    
  <tr>
    <td><?php echo elgg_echo('themer:footer:links:color');?></td>
    <td><input type='text' class="custom" id="footer_links_color" name="footer_links_color" value="<?php echo $settings->footer_links_color;?>"/></td>
   	<td></td>    
  </tr>    
        
  <tr>
    <td><?php echo elgg_echo('themer:topbar:height');?></td>
    <td><input type='text' class="custom" placeholder="30" name="topbar_height" value="<?php echo $settings->topbar_height;?>"/></td>
   	<td></td>    
  </tr>   
  <tr>
    <td><?php echo elgg_echo('themer:header:height');?></td>
    <td><input type='text' class="custom" placeholder="60" name="header_height" value="<?php echo $settings->header_height;?>"/></td>
   	<td></td>
  </tr>
  <tr>
    <td><?php echo elgg_echo('themer:header:image:color');?></td>
    <td>
       <select name="headerbg">
       		<option value="<?php echo $settings->headerbg;?>">Default: <?php echo $settings->headerbg;?></option>
        	<option value="color">Color</option>
            <option value="image">Image</option>
        </select>
    </td>  
    <td></td>    
  </tr> 
  <tr>
    <td><?php echo elgg_echo('themer:sitebg:color:image');?></td>
    <td>
       <select name="sitebg">
            <option value="<?php echo $settings->sitebg;?>">Default: <?php echo $settings->sitebg;?></option> 
        	<option value="color">Color</option>
            <option value="image">Image</option>
        </select>
    </td>  
    <td></td>    
  </tr>       
   <tr>
    <td><?php echo elgg_echo('themer:site:logo:text:image');?></td>
    <td>
       <select name="logo">
            <option value="<?php echo $settings->logo;?>">Default: <?php echo $settings->logo;?></option> 
        	<option value="text">Text</option>
            <option value="image">Image</option>
        </select>
    </td>  
    <td><input type="file" name="logo_file"/></td>    
  </tr>   
   <tr>
    <td><?php echo elgg_echo('themer:site:more:menu');?></td>
    <td>
       <select name="menumore">
            <option value="<?php echo $settings->menumore;?>">Default: <?php echo $settings->menumore;?></option> 
        	<option value="enabled">Enable</option>
            <option value="disable">Disable</option>
        </select>
    </td>  
    <td></td>    
  </tr>             
</table><br />

<div>
	<input type="submit" value="<?php echo elgg_echo('themer:save');?>" />
	<a href="<?php echo $reset;?>" class="elgg-button elgg-button-submit"><?php echo elgg_echo('themer:reset');?></a>
</div>

<script>
require(['<?php echo elgg_get_site_url();?>mod/themer/vendors/spectrum.js'], function () {
	<?php
	$fields = $themer->Attrs();
	foreach($fields as $field){ ?>
	  $("#<?php echo $field;?>").spectrum({
    		preferredFormat: "hex",	
  		});
	<?php } ?>	  
});
</script>

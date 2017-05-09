
<?php

elgg_unregister_menu_item('footer', 'powered');

elgg_register_event_handler('init', 'system', 'footer_rename_init'); 
function footer_rename_init() {	
}
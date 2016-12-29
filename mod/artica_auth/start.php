<?php


  elgg_register_event_handler('init','system','articaAuth2_init');

  function articaAuth2_init()
  {

    $actions_base = elgg_get_plugins_path() . 'artica_auth/actions/articaAuth2';
    elgg_register_action('artica/register',"$actions_base/register.php",'public');
    elgg_register_action('artica/login',"$actions_base/login.php",'public');

  }

?>

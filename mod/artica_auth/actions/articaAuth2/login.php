<?php

  if ( $_GET['username'] && $_GET['password'] ){
     $username= $_GET['username'];
     $password= $_GET['password'];

  }else{

     $inputJSON = file_get_contents('php://input');
     $input = json_decode($inputJSON, TRUE);
     $username = $input['username'];
     $password = $input['password'];
 }

  $result = elgg_authenticate($username, $password);

  $user = get_user_by_username($username);
  if (!$user) {
    register_error(elgg_echo('login:baduser'));
    forward(REFERER);
  }

  try {
        login($user, $persistent);
  } catch (LoginException $e) {
          register_error($e->getMessage());
          forward(REFERER);
  }

  // elgg_echo() caches the language and does not provide a way to change the language.
  // @todo we need to use the config object to store this so that the current language
  // can be changed. Refs #4171
  if ($user->language) {
          $message = elgg_echo('loginok', array(), $user->language);
  } else {
          $message = elgg_echo('loginok');
  }  

  $params = array('user' => $user, 'source' => $forward_source);
  $forward_url = elgg_trigger_plugin_hook('login:forward', 'user', $params, $forward_url);

  system_message($message);
  forward($forward_url);

 ?>

<?php

  $inputJSON = file_get_contents('php://input');
  $input = json_decode($inputJSON, TRUE);

  $username = $input['username'];
  $password = $input['password'];
  $name = $input['name'];
  $email = $input['email'];


  $guid = register_user($username, $password, $name, $email);

  forward(REFERER);

 ?>

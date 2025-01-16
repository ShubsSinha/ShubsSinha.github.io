<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['demo-message'];

  $to = "sinha.shu@northeastern.edu";
  $headers = "From: " . $email;

  mail($to, "New message from $name", $message, $headers);
?>

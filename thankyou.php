<?php

$username = $_GET['username'];
$action = $_GET['action'];

if ($username && $action == 'login') {
  echo "Thank you for logging in, " . $username;
}

if ($username && $action == 'sign-up') {
  echo "Thank you for signing up, " . $username;
}

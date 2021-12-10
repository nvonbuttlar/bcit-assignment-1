<?php 
$request_method = $_SERVER['REQUEST_METHOD'];
$request_type = $_GET['type'];
$username   = trim($_POST['username']);
$password   = trim($_POST['password']);
$verify     = trim($_POST['verify_password']);
$salt       = '01091991'; 


function redirectIndex () {
  header("Location: index.php");
}
function redirectSignUp () {
  header("Location: signup.php");
}
function redirectLogin () {
  header("Location: login.php");
}
function redirectThankYou ($user, $type) {
  header("Location: thankyou.php?username=" . $user . "&action=" . $type);
}

if ($request_method == "GET") {
  redirectIndex();
}

if ($request_method == "POST") {
  // echo "request method: " . $request_method;
  // echo "<br>";

  // Sign up
  if ($request_type == "sign-up") {

    var_dump($_POST);

    if(!preg_match('/^([0-9]|[a-z]){7,15}$/i', $username))
    {
      redirectSignUp();
    } elseif (!preg_match('/((?=.*[a-z])(?=.*[0-9])(?=.*[!?|@])(?=.*[!?|@])){8,}/i', $password)) {
      redirectSignUp();
    } elseif ($password != $verify) {
      redirectSignUp();
    } else {
      $fp = fopen('users.txt', 'a+');
      $db_username   = $username;
      $db_password   = $password;          
      $hash = md5($password . $salt);
      fwrite($fp, $username . '|' . trim($hash) . PHP_EOL);
      fclose($fp);

      redirectThankYou($username, $request_type);
    }
  }

  // Login
  if ($request_type == "login") {
    
    $lines = file('users.txt');

    foreach ($lines as $line)
    { 

      $pieces = explode('|', $line);

      var_dump($pieces);
      
      $hash = md5($password . $salt);
      $tr_db_pass = trim($pieces[1]);

      if($username == $pieces[0] && $hash == $tr_db_pass)
      {
        $valid_login = true;
        return redirectThankYou($username, $request_type);
      } else {
        $valid_login = false;
      } 
    }

    if (!$valid_login) {
      redirectLogin();
    } 
  }
}

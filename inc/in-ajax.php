<?php
session_start();
include 'myconf.php';
require $INC_DIR . 'class.database.php';
$database = new Database();

$database->query('SELECT uid, uname, email, hash FROM users WHERE uname=:uname AND email=:email');
$uname = strip_tags($_POST['uname']);
$email = strip_tags($_POST['email']);
$upass = strip_tags($_POST['pwd']);
$database->bind(':uname', $uname);
$database->bind(':email', $email);

$database->execute();
$row = $database->single();
$hash = $row['hash'];

if($database->rowCount() == 1)
{
  if(password_verify($upass, $hash))
  {
    $_SESSION['user_session'] = $row['uid'];
    $_SESSION['username'] = $row['uname'];
    echo "yes";
  }
  else
  {
  echo "no";
  }
}




 ?>

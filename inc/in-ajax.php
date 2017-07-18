<?php
session_start();
include 'myconf.php';
require $INC_DIR . 'class.database.php';
//include $INC_DIR . 'cookie.php';
$database = new Database();

$database->query('SELECT uid, uname, email, hash, role FROM users WHERE uname=:uname AND email=:email');
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

  if (password_verify($upass, $hash)) {
    //cookie block
    if($_POST['remember_me']){
      setcookie('remember_me', $row['uname'], time() + (86400), "/"); // 86400 = 1 day
    }else{

      setcookie('remember_me', $row['uname'], time() - 3600, "/");

    }
    //end cookie block
    $_SESSION['user_session'] = $row['uid'];
    $_SESSION['username'] = $row['uname'];
    $_SESSION['role'] = $row['role'];
    echo "yes";
  } else { echo "wrongpwd";}

} else { echo "no"; }














 ?>

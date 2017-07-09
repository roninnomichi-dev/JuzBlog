<?php
session_start();

include $_SERVER['DOCUMENT_ROOT'] . '/inc/myconf.php';
include_once $INC_DIR . 'class.database.php';

$database = new Database();



$uname = $_POST['name'];
$email = $_POST['email'];
$upass = $_POST['pwd'];
$hash = password_hash($upass, PASSWORD_BCRYPT);

$database->query('INSERT INTO users (uid, uname, email, hash) VALUES (UUID(), :uname, :email, :hash)');

$database->bind(':uname', $uname);
$database->bind(':email', $email);
$database->bind(':hash', $hash);
$database->execute();


 
 // $_SESSION['username'] = $uname;
  echo "yep";






 ?>

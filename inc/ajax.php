<?php
session_start();

include $_SERVER['DOCUMENT_ROOT'] . '/inc/myconf.php';
include_once $INC_DIR . 'class.database.php';

$database = new Database();



$uname = $_POST['name'];
$email = $_POST['email'];
$upass = $_POST['pwd'];
$hash = password_hash($upass, PASSWORD_BCRYPT);
$role = "user";
try {
  $database->query('INSERT INTO users (uid, uname, email, hash, role) VALUES (UUID(), :uname, :email, :hash, :role)');

$database->bind(':uname', $uname);
$database->bind(':email', $email);
$database->bind(':hash', $hash);
$database->bind(':role', $role);
$database->execute();

} catch (PDOException $e) {
  echo $e->getMessage();

}





  echo "yep";






 ?>

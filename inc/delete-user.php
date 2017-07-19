<?php
session_start();
include 'myconf.php';
require $INC_DIR . 'class.database.php';
$database = new Database();
try {
  $database->query('DELETE FROM userss WHERE user_id=:user_id');
$user_id = $_POST['uid'];
$database->bind(':user_id', $user_id);
$database->execute();
} catch (PDOException $e) {
  echo $e->getMessage();
}
echo "deleted";


?>

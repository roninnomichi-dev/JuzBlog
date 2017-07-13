<?php

include_once 'inc/myconf.php';
include_once 'inc/class.database.php';
$database = new Database();

if (isset($_POST['user-logout-fp']) && !empty($_POST['user-logout-fp'])) {
  if ($database->doLogout()) {
    $database->redirect('../index.php');
  };
}



 ?>

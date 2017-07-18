<?php
session_start();
include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/myconf.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/inc/class.database.php';
$database = new Database();


  if ($database->doLogout()) {

    $database->redirect('../index.php');
  }






 ?>

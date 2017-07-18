<?php
session_start();
require_once 'myconf.php';
include_once $INC_DIR . 'class.database.php';
$database = new Database();
if(!$database->is_loggedin()) { $database->redirect('../index.php');}


$page = "admin";
include 'head.html.php';

 ?>












  <?php include 'foot.html.php'; ?>

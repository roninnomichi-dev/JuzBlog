<?php
session_start();
require_once 'myconf.php';
include_once $INC_DIR . 'class.database.php';
$database = new Database();
// how to allow admin only? check $_SESSION['username?'] and ['user_session']
//if(!$database->is_loggedin()) { $database->redirect('../index.php');}

// no-database call method
if($_SESSION['role'] !== "admin"){
  $database->redirect('../index.php');
}
$page = "admin";
include 'head.html.php';

 ?>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-3">
        <!-- sidebar menu -->
        <p>menu</p>
        <ul class="">
          <li class=""><a href="#">link</a></li>
          <li class=""><a href="#">link</a></li>
          <li class=""><a href="#">link</a></li>
          <li class=""><a href="#">link</a></li>
          <li class=""><a href="#">link</a></li>
          <li class=""><a href="#">link</a></li>
        </ul>
    </div>
    <div class="col-sm-9">
<!-- actions -->

  <div class="panel-box">
    <div class="panel text-white">
      <i class="fa fa-users fa-5x"></i>
      <div class="panel-content">
        <h2>users</h2>
      </div>
    </div>
    <div class="panel text-white">
<i class="fa fa-paper-plane-o fa-5x"></i>
<div class="panel-content">
  <h2>posts</h2>
</div>
    </div>
    <div class="panel text-white">
      <i class="fa fa-comments-o fa-5x"></i>
      <div class="panel-content">
        <h2>comments</h2>
      </div>
    </div>
    <div class="panel text-white">
      <i class="fa fa-money fa-5x"></i>
      <div class="panel-content">
        <h2>pay juz?</h2>
      </div>
    </div>
  </div>

    </div>
  </div>
</div>











  <?php include 'foot.html.php'; ?>

<?php
session_start();
require_once 'myconf.php';
include_once $INC_DIR . 'class.database.php';
$database = new Database();
if(!$database->is_loggedin()) { $database->redirect('../index.php');}


$page = "write";
include 'head.html.php';

 ?>

      <div class="header">
      <h1 id="rite"class="display-3 text-white">Write.</h1>
      <h1 id="edit" class="display-3 text-white gone">Edit.</h1>
      </div>
<div class="row shade">
<div class="col-sm-10">
  <div class="container">
    <div id="writebox">


<!--  write new post -->
  <form class="text-white" id="post-blog" name="post-blog">
    <fieldset class="form-group">
      <label for="title">title</label>
      <input type="text" class="form-control" name="title" id="title" placeholder="title">
    </fieldset>
    <fieldset class="form-group">
      <label for="content">content</label>
      <textarea class="form-control" id="content" name="content" rows="15"></textarea>

    </fieldset>

    <input type="hidden" name="author" value="<?php  echo $_SESSION['user_session'];?>">
    <button type="submit" name="post-blog-btn" class="btn btn-primary">Submit</button>
  </form>


</div>
<br />
  </div>
</div>
<div class="col-sm-2">
  <p class="text-white">your posts</p>
  <small class="text-white">click to edit</small>
  <?php

  $database->query('SELECT post_id, title, content, post_date  FROM blogposts WHERE author_id = :uid');
  $database->bind(':uid', $_SESSION['user_session']);
  $database->execute();
  $userposts = $database->resultSet();
  if ($database->rowCount()>0) {
    include $INC_DIR . 'upost_ul.php';
  }
  else {
    include $INC_DIR . 'ul.php';
  }

  ?>

</div>

</div>
<div class="row">
  <div class="col-sm-12">
    <div id="yep" class="alert alert-success alert-dismissible fade show">
      <p>Posted!</p>  <a class="btn btn-primary" href="../home.html.php">Go Home?</a>
      <a type="button" href="blogwrite.html.php" id="clear-btn" class="btn btn-warning gone">new post?</a>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">

    <span aria-hidden="true">dismiss <i class="fa fa-thumbs-o-up"></i></span>

    </div>
  </div>
</div>
 </div>
 <?php include 'foot.html.php'; ?>

<?php
session_start();
require_once 'myconf.php';
include_once $INC_DIR . 'class.database.php';
$database = new Database();
if(!$database->is_loggedin()) { $database->redirect('../index.php');}


$page = "write";
include 'head.html.php';

 ?>
<!-- markdown helper modal -->
<div class="modal fade" id="mdModal" tabindex="-1" role="dialog" aria-labelledby="mdModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="mdModalLabel">Markdown syntax</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p><b>What is Markdown?</b><br>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- page content start -->
<div class="container-fluid">


      <div class="header shade">
      <h1 id="rite"class="display-3 text-white">write.</h1>
      <h1 id="edit" class="display-3 text-white gone">edit.</h1>
      <span id="helper" class="text-danger display-4 fade show"></span><button id="clear-btn" class="btn btn-warning float-right gone">new post?</button>
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
      <textarea class="form-control" id="content" name="content" rows="10"></textarea>

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
<div class="row ">
  <div class="col-sm-12">
    <h3>JuzBlog now has Markdown support!. <br><small>not familiar with markdown?</small></h3>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#mdModal">
      Markdown help
    </button>
  </div>
</div>
<div class="row">
  <div class="col-sm-12">

  </div>
</div>
 </div>
 <?php include 'foot.html.php'; ?>

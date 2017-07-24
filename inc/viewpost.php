<?php
session_start();
include 'myconf.php';
include 'class.database.php';

include 'Parsedown.php';
$database = new Database();
$parsedown = new Parsedown();
$postID = $_GET['postid'];
$database->query('SELECT post_id, title, content, post_date, author_id, uname FROM blogposts INNER JOIN users
ON author_id = users.uid WHERE post_id = :postID');
$database->bind(':postID', $postID);
$post = $database->single();
$author = $post['author_id'];
$page = "words";
include 'head.html.php';
 ?>

      <div class="header">
      <h1 class="display-3 text-white"><?php echo $page; ?> from <?php echo $post['uname']; ?></h1>
      </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-9">
      <div class="container">


      <p class="text-left text-muted"><?php echo date('jS M Y H:i:s', strtotime($post['post_date'])); ?></p>
      <h1 class="display-2"><?php echo $post['title']; ?></h1>

      <div class="container">
        <p class="">
        <?php echo $parsedown->text($post['content']); ?>

      </p>
      </div>



      </div>
    </div>
    <div class="col-sm-3">

    <p class="text-xs-center text-md-right">more from <?php echo $post['uname']; ?></p>
  <?php include 'list-userposts-view.php'; ?>
    </div>
  </div>
</div>
 <?php include 'foot.html.php'; ?>

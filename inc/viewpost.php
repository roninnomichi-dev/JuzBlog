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
$page = "words.";
include 'head.html.php';
 ?>

      <div class="header">
      <h1 class="display-3 text-white"><?php echo $page; ?></h1>
      </div>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-9">
      <div class="container">


      <p class="text-left text-muted"><?php echo date('jS M Y H:i:s', strtotime($post['post_date'])); ?></p>
      <h1 class="display-2 text-white"><?php echo $post['title']; ?></h1>
      <p class="text-left text-white">by: <?php echo $post['uname']; ?></p>
      <div class="container text-white">
        <p class="text-white">
        <?php echo $parsedown->text($post['content']); ?>

      </p>
      </div>



      </div>
    </div>
    <div class="col-sm-3">

    <p class="text-white h6">posts by <?php echo $post['uname']; ?></p>
  <?php include 'list-userposts-view.php'; ?>
    </div>
  </div>
</div>
 <?php include 'foot.html.php'; ?>

<?php
session_start();
include __DIR__ . 'inc/class.database.php';
include 'inc/class.user.php';
//include 'inc/Parsedown.php';
$database = new Database();
//$md = new Parsedown();

$database->query('SELECT blogposts.post_id, blogposts.title, blogposts.content, blogposts.post_date, users.uname FROM blogposts, users WHERE post_id = :postID AND user.uid = author_id');
$database->bind(':postID' => $_GET['id']);
$database->execute();
$post = $database->resultSet();

include 'inc/head.html.php';
 ?>

      <div class="header">
      <h1 class="display-3">words.</h1>
      </div>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-9">
      <div class="container">


      <p class="text-left text-muted"><?php echo date('jS M Y H:i:s', strtotime($post['post_date'])); ?></p>
      <h1 class="display-2"><?php echo $post['title']; ?></h1>
      <p class="">
        <?php echo $post['content'];  ?>
        
      </p>
      <p class="text-left">by: <?php echo $post['uname'] ?></p>

      </div>
    </div>
    <div class="col-sm-3">

    <p>other posts by <?php echo $post['uname'] ?></p>
    </div>
  </div>
</div>
 <?php include 'inc/foot.html.php'; ?>



<?php

 //SELECT title, content, date, uname FROM blogposts INNER JOIN users
//ON author_id = users.uid;

$database->query('SELECT post_id, title, post_date, uname FROM blogposts INNER JOIN users
ON author_id = users.uid ORDER BY post_date DESC LIMIT 10');
$rows = $database->resultset();

foreach ($rows as $post):

 ?>

 <p class=""></p>

  <a class="h4 list-item" href="/inc/viewpost.php?postid=<?php echo  $post['post_id']; ?>" > <?php echo $post['title']; ?></>

  <p class="lead"><?php echo $post['uname']; ?>,  <small class="text-muted "><?php echo date("F jS, Y", strtotime($post['post_date'])); ?></small></p>



<hr>
<?php
 endforeach;
 ?>

<?php
//session_start();
require_once 'myconf.php';
include_once $INC_DIR . 'class.database.php';
$database = new Database();
//$author = $_REQUEST['author'];
$database->query('SELECT post_id, title, post_date FROM blogposts WHERE author_id = :uid');
$database->bind(':uid', $author);
$entries = $database->resultSet();

 ?>
 <div class="uposts ">


<ul class="text-info">
  <?php foreach ($entries as $entry): ?>
  <li class="">
<a class="h5" href="viewpost.php?postid=<?php echo $entry['post_id']; ?>" ><?php echo $entry['title'] ?></a>
<p class="text-muted"><?php echo $entry['post_date'] ?>

</p>
  </li>
  <hr>
  <?php endforeach; ?>
</ul>
 </div>

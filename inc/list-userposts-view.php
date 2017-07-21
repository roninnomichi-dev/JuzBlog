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
<ul class="list-group">
  <?php foreach ($entries as $entry): ?>
  <li class="list-item text-white">
<a class="h5" href="viewpost.php?postid=<?php echo $entry['post_id']; ?>" ><?php echo $entry['title'] ?></a>
<p class="text-muted"><?php echo $entry['post_date'] ?>

</p>
  </li>
  <?php endforeach; ?>
</ul>

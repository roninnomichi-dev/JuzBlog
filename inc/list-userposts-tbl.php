<?php
session_start();
require_once 'myconf.php';
include_once $INC_DIR . 'class.database.php';
$database = new Database();

$uid = $_REQUEST['user'];
$usersName = $_REQUEST['name'];
$database->query('SELECT title, LEFT(content,20), post_date FROM blogposts WHERE author_id = :uid');
$database->bind(':uid', $uid);
$database->execute();
$post = $database->resultSet();

 ?>
 <h2 class="">posts by user <?php echo $usersName; ?></h2>
 <table class="table table-striped">
 <thead>
 <tr>
   <th>#</th>

   <th>title</th>
   <th>text</th>
   <th>date</th>
   <th>delete post?</th>
 </tr>
 </thead>
 <tbody>
   <?php foreach($post as $row): ?>

   <tr class="klpst" >
       <th scope="row">

     </th>

       <td><?php echo $row['title']; ?></td>
       <td><?php echo $row['LEFT(content,20)']; ?></td>
      <td><?php echo date("F jS, Y", strtotime($row['post_date']));?></td>
      <td ><button class="btn btn-danger btn-sm killpost-btn" type="submit" name="killpost-btn" data-pid="<?php echo $row['post_id']; ?>">delete post</button></td>
    </tr>
  <?php endforeach; ?>
    </tbody>
  </table>

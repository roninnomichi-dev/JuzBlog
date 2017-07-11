<?php
session_start();
include 'myconf.php';
require $INC_DIR . 'class.database.php';
$database = new Database();

$database->query('SELECT title, content, post_date FROM blogposts WHERE post_id=:post_id');
$post_id = $_POST['post'];
$database->bind(':post_id', $post_id);
$database->execute();
$row = $database->single();
?>


<form class="text-white" id="update-blog" name="update-blog">

  <fieldset class="form-group">
    <p class="text-right">
      <?php echo date("F jS, Y", strtotime($row['post_date']));?>
    </p>
    <label for="title">title</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="title" value="<?php  echo $row['title'];?>">
  </fieldset>

  <fieldset class="form-group">
    <label for="content">content</label>
    <textarea name="content" class="form-control" id="content" rows="15"><?php echo $row['content']; ?></textarea>

  </fieldset>
<input id="hid_pid" type="hidden" name="post_id" value="<?php  echo $post_id;?>">




  <div class="btn-group" role="group">


  <button type="submit" name="update-blog-btn" id="update-blog-btn" class="btn btn-primary">Update</button>
  <button type="button" name="delete-blog-btn" id="delete-blog-btn" class="btn btn-warning">Delete</button>
  <button type="submit" name="clear-form-btn" id="clear-form-btn" class="btn btn-success">Clear</button>
  <button type="submit" name="write-blog-btn" id="write-blog-btn" class="btn btn-info">New Post</button>
  </div>
</form>

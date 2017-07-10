<?php
session_start();
include 'myconf.php';
require $INC_DIR . 'class.database.php';
$database = new Database();

$database->query('SELECT title, content, date FROM blogposts WHERE post_id=:post_id');
$post_id = $_POST['post'];
$database->bind(':post_id', $post_id);
$database->execute();
$row = $database->single();
?>


<form class="text-white" id="update-blog" name="update-blog">

  <fieldset class="form-group">
    <label for="title">title</label>
    <input type="text" class="form-control" id="title" placeholder="title" value="<?php  echo $row['title'];?>">
  </fieldset>

  <fieldset class="form-group">
    <label for="content">content</label>
    <textarea class="form-control" id="content" rows="15" value="<?php echo $row['content']; ?>"></textarea>

  </fieldset>

  <input type="hidden" name="author" value="<?php  echo $_SESSION['user_session'];?>">



  <div class="btn-group" role="group">


  <button type="submit" name="update-blog-btn" id="update-blog-btn" class="btn btn-primary">Update</button>
  <button type="submit" name="delete-blog-btn" id="delete-blog-btn" class="btn btn-warning">Delete</button>
  <button type="submit" name="clear-blog-btn" id="clear-blog-btn" class="btn btn-succes">Clear</button>
  <button type="submit" name="write-blog-btn" id="write-blog-btn" class="btn btn-default">New Post</button>
  </div>
</form>

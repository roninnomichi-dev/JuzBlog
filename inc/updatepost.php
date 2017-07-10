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

  <input type="hidden" name="post_id" value="<?php  echo $_POST['post_id'];?>">

  <div class="btn-group" role="group">


  <button type="submit" name="update-blog-btn" id="update-blog-btn" class="btn btn-primary">Update</button>
  <button type="submit" name="delete-blog-btn" id="delete-blog-btn" class="btn btn-warning">Delete</button>
  <button type="submit" name="clear-blog-btn" id="clear-blog-btn" class="btn btn-default">Clear</button>
  </div>
</form>

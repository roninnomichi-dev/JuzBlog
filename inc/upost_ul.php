<ul class="postlist list-group">
  <?php foreach ($userposts as $upost): ?>

<li class="list-group-item">
  <a id="<?php echo $upost['post_id']; ?>"><?php echo $upost['title']; ?></a> <span class=""><?php echo date("F jS, Y", strtotime($upost['post_date']));?></span>
</li>
<?php endforeach; ?>
</ul>

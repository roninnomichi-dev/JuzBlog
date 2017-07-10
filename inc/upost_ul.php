<ul class="postlist list-group">
  <?php foreach ($userposts as $upost): ?>

<li class="list-group-item">
  <p class=""><a href="#" id="<?php echo $upost['post_id']; ?>"><?php echo $upost['title']; ?></a><br> <?php echo date("F jS, Y", strtotime($upost['post_date']));?></p>
</li>
<?php endforeach; ?>
</ul>

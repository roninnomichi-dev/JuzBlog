<ul class="list-group">
  <?php foreach ($userposts as $upost): ?>

<li class="list-group-item">
  <a href="#"><?php echo $upost['title']; ?></a> <span class=""><?php echo date("F jS, Y", strtotime($upost['post_date']));?></span>
</li>
<?php endforeach; ?>
</ul>

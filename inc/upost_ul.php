<ul class="postlist text-info">
  <?php foreach ($userposts as $upost): ?>

<li class="">
  <a href="#" id="<?php echo $upost['post_id']; ?>">
    <p class=""><?php echo $upost['title']; ?></a><br> <?php echo date("F jS, Y", strtotime($upost['post_date']));?></p>
</li>
<?php endforeach; ?>
</ul>

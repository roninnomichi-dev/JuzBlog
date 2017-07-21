

<?php

 //SELECT title, content, date, uname FROM blogposts INNER JOIN users
//ON author_id = users.uid;

$database->query('SELECT post_id, title, content, post_date, uname FROM blogposts INNER JOIN users
ON author_id = users.uid ORDER BY post_date DESC LIMIT 5');
$rows = $database->resultset();

foreach ($rows as $post):

 ?>

 <p class="text-muted"><?php echo date("F jS, Y", strtotime($post['post_date'])); ?></p>

  <h2 class="display-4 slida" <?php echo 'id="' . $post['post_id'] . '"'; ?> > <?php echo $post['title']; ?></h2>

  <p class="lead"><?php echo $post['uname']; ?> </p>

  <section class="content" <?php echo 'data-get="' . $post['post_id'] . '"'; ?>><?php
        $cont = $post['content'];
        echo $Parsedown->text($cont); ?></section>

<hr>
<?php
 endforeach;
 ?>

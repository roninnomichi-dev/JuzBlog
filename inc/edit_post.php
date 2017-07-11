<?php
session_start();
include 'myconf.php';
require $INC_DIR . 'class.database.php';
$edit = new Database();
try {


$edit->query('UPDATE blogposts SET title = :title, content = :content WHERE post_id = :post_id');
$title = strip_tags($_POST['title']);
$content = strip_tags($_POST['content']);
$post_id = $_POST['post_id'];
$edit->bind(':title', $title);
$edit->bind(':content', $content);
$edit->bind(':post_id', $post_id);
$edit->execute();

} catch (PDOException $e) {
echo $e->getMessage();

}
echo "post edited";
 ?>

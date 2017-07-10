<?php
session_start();
include 'myconf.php';
require $INC_DIR . 'class.database.php';
$database = new Database();
try {


$database->query('UPDATE blogposts SET title = :title, content = :content WHERE post_id = :post_id');
$title = strip_tags($_POST['title']);
$content = strip_tags($_POST['content']);
$post_id = strip_tags($_POST['post_id']);
$database->bind(':title', $title);
$database->bind(':content', $content);
$database->bind(':post_id', $post_id);
$database->execute();

} catch (PDOException $e) {
echo $e->getMessage();

}
echo "post edited";
 ?>

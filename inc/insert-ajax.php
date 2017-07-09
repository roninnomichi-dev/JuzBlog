<?php
session_start();
include 'myconf.php';
require $INC_DIR . 'class.database.php';
$database = new Database();
try {


$database->query('INSERT INTO blogposts (title, content, author_id) VALUES (:title, :content, :author_id)');
$title = strip_tags($_POST['title']);
$content = strip_tags($_POST['content']);
$author_id = strip_tags($_POST['author']);
$database->bind('title', $title);
$database->bind('content', $content);
$database->bind('author_id', $author_id);
$database->execute();

} catch (PDOException $e) {
echo $e->getMessage();

}
echo "yep";
 ?>

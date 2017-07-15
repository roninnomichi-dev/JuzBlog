
<?php
session_start();
include 'myconf.php';
require $INC_DIR . 'class.database.php';
$database = new Database();
try {
  $database->query('DELETE FROM blogposts WHERE post_id=:post_id');
$post_id = $_POST['post_id'];
$database->bind(':post_id', $post_id);
$database->execute();
} catch (PDOException $e) {
  echo $e->getMessage();
}
echo "deleted";


?>

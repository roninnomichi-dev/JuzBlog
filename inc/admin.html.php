<?php
session_start();
require_once 'myconf.php';
include_once $INC_DIR . 'class.database.php';
$database = new Database();

if($_SESSION['role'] !== "admin"){
  $database->redirect('../index.php');
}

$page = "admin";
include 'head.html.php';

 ?>
 </div>
<div class="container-fluid">
  <div class="row">
    <div class="col">
      <header>
        <h1 class="display-3"><?php echo $page; ?> <i class="fa fa-tachometer"></i></h1>
      </header>
    </div>
  </div>

  <!-- animated boxes -->
  <div class="row">

    <div class="col">

<?php
$database->query('SELECT COUNT(*) FROM users');
$database->execute();
 $usernum = $database->getCount();
  ?>

<div class="container-fluid">
<div class="fxMenu">

  <div class="fxItem"><i class="fa fa-users fa-5x"></i><h1><?php echo $usernum; ?></h1><div class="fxContent text-danger"><h2>users</h2></div></div >
  <?php $database->query('SELECT COUNT(*) FROM blogposts');
  $database->execute();
  $postnum = $database->getCount(); ?>


  <div class="fxItem"><i class="fa fa-paper-plane-o fa-5x"></i><h1><?php echo $postnum; ?></h1><div class="fxContent text-success"><h2>posts</h2></div></div >

  <div class="fxItem"><i class="fa fa-comments-o fa-5x"></i><h1>47</h1><div class="fxContent text-warning"><h2>comments</h2></div></div >

  <div class="fxItem"><i class="fa fa-money fa-5x"></i><h1>0!</h1><div class="fxContent text-info"><h2>money for juz?</h2></div></div >
</div>
    </div>
  </div>
</div>

<div class="row">

  <div class="col">
    <div class="container">


    <h2 class="">blog users</h2>



    <table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>userame</th>
      <th>email</th>
      <th>posts</th>
      <th>view posts</th>
      <th>remove user</th>
    </tr>
  </thead>
  <tbody>

      <?php
  $database->query("SELECT uid, uname, email  FROM users");
  $database->execute();
  $rows= $database->resultSet();

  foreach($rows as $row): ?>
  <tr>
      <th scope="row">
      <?php
      $user = $row['uid'];
      ?>
    </th>
      <td><?php echo $row['uname']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <?php
      $database->query("SELECT COUNT(*) FROM blogposts WHERE author_id = :uid");
      $database->bind(':uid', $user);
      $database->execute(); ?>
      <td><?php echo $database->getCount(); ?></td>
      <td><button class="btn btn-success btn-sm viewpost-btn" type="submit" name="viewpost-btn" id="<?php echo $user; ?>" data-id="<?php echo $row['uname']; ?>">view posts</button></td>
      <td><button class="btn btn-warning btn-sm killluser-btn" type="submit" name="killuser-btn"   data-id="<?php echo $user; ?>">delete user</button></td>
    </tr>
  <?php endforeach; ?>
    </tbody>
  </table>

  <div id="uposts">
    <!-- load user-post list ajax/postlist.html.php -->
  </div>
  </div>
</div>
</div>








</div>
  <?php include 'foot.html.php'; ?>

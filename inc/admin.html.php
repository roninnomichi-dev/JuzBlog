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
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <header>
        <h1 class="display-3 text-white"><?php echo $page; ?> <i class="fa fa-tachometer"></i></h1>
      </header>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-2">
        <!-- sidebar menu -->
<ul class="list-group">
  <li class="list-group-item"></li>
    <li class="list-group-item"></li>
      <li class="list-group-item"></li>
        <li class="list-group-item"></li>
          <li class="list-group-item"></li>
</ul>

    </div>
    <div class="col-md-5">
<!-- actions -->
<?php
$database->query('SELECT COUNT(*) FROM users');
$database->execute();
 $usernum = $database->getCount();
  ?>
<div class="container-fluid">
<ul class="fxMenu">
  <li><i class="fa fa-users fa-5x"></i><h1><?php echo $usernum; ?></h1><div class="fxContent text-danger"><h2>users</h2></div></li>
  <?php $database->query('SELECT COUNT(*) FROM blogposts');
  $database->execute();
  $postnum = $database->getCount(); ?>
  <li><i class="fa fa-paper-plane-o fa-5x"></i><h1><?php echo $postnum; ?></h1><div class="fxContent text-success"><h2>posts</h2></div></li>

</ul>
</div>

    </div>
    <div class="col-md-5">
    <div class="container-fluid">
      <ul class="fxMenu">
        <li><i class="fa fa-comments-o fa-5x"></i><h1>47</h1><div class="fxContent text-warning"><h2>comments</h2></div></li>

        <li><i class="fa fa-money fa-5x"></i><h1>0!</h1><div class="fxContent text-info"><h2>money for juz?</h2></div></li>
      </ul>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-12">
    <h2 class="text-white">blog users <small>examle table</small></h2>
    <p class="text-white">later: <pre>&lt;?php include 'user-table.php'; ?></pre> OR maybe <pre>&lt;?php $document->query(); ?></pre> etc.</p>
    <table class="table table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
  </div>

</div>








</div>
  <?php include 'foot.html.php'; ?>

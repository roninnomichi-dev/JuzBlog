<?php

 ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/master.css">
    <title><?php echo $page; ?></title>
  </head>
  <body class="open-sans">
    <!-- logout confirm modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="logoutModalLabel">Logout</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Do you really want to <b>log out?</b><br></p>
            <p>Do you really want to make me cry...</p>
          </div>
          <div class="modal-footer">
            <a href="inc/logout.php" type="button" class="btn btn-outline-danger">Logout</a>
            <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Back</button>
          </div>
        </div>
      </div>
    </div>
    <!-- end modal -->
    <div class="frontpage">
      <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">JuzWeb Blog - <?php echo $page; ?></a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../home.html.php">home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="blogwrite.html.php">write</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">juzweb</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="admin.html.php">admin</a>
      </li>
    </ul>
  </div>
  <p class="namer"><?php echo $_SESSION['username']; ?></p>
  <!-- logout -->
    <button  data-toggle="modal" data-target="#logoutModal" class=" btn btn-outline-secondary btn-logout" name="logout" >Logout</button>

</nav>

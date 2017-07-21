
<?php
session_start();

include_once 'inc/myconf.php';
include_once 'inc/class.database.php';
include 'inc/Parsedown.php';
$database = new Database();
$Parsedown = new Parsedown();
if(!$database->is_loggedin()) { $database->redirect('index.php');}







 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/master.css">
    <title>class tester</title>
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
    <div class="frontpage">
      <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">JuzWeb Blog Tester</a>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/inc/blogwrite.html.php">write</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/inc/admin.html.php">admin</a>
      </li>
    </ul>

  </div>


<p class="namer"><?php echo $_SESSION['username']; ?></p>
<button  data-toggle="modal" data-target="#logoutModal" class=" btn btn-outline-secondary btn-logout" name="logout" >Logout</button>

</nav>
<div class="container-fluid shade main">






        <h1 class="display-2 text-white">hello <?php echo $_SESSION['username']; ?></h1>



<div class="jumbotron jumbotron-fluid">

  <div class="container text-white">

    <h3 class="display-3"> Get talking.  <span id="d1">blah,  </span><span id="d2">blah, </span><span id="d3">blah...</span></h3>

  </div>

  </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="container text-white">

            </div>
          </div>
        </div>
      </div>
        <div class="row">
  <div class="col-sm-4">
    <div class="card">
      <div class="card-block">
        <h3 class="card-title">Wanna feel important?.</h3>
        <p class="card-text">Remember: if it's not on the internet, it didn't happen.</p>
        <a href="#" class="btn btn-success">Get Involved!</a>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card">
      <div class="card-block">
        <h3 class="card-title">Juzzy's Listening</h3>
        <p class="card-text">He hears, he understands...</p>
        <a href="#" class="btn btn-danger">Get Analysed!</a>
      </div>
    </div>
  </div>

  <div class="col-sm-4">
    <div class="card">
      <div class="card-block">
        <h3 class="card-title">This does nothing!</h3>
        <p class="card-text">Oh but dont you just want to click that button?.</p>
        <a href="#" class="btn btn-primary">Do nothing!</a>

      </div>
    </div>
  </div>
  <br>
        <hr class="">
</div>

        </div>

<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="container-fluid">



  </div>
    </div>
  </div>
<div class="row">
  <div class="col-sm-12">
    <div class="container">
      <h1 class="display-2">Latest Posts</h1><br>
   <p class="text-muted">What are they talking about in JuzWorld?</p>
    </div>

  </div>
</div>

  <div class="row">
    <div class="col-sm-12">
    <div class="container">
      <?php  include 'inc/postlink.html.php'; ?>
    </div>

    </div>

    <button type="button" class="btn btn-sm btn-secondary" id="more-btn" name="more-btn">more</button>
</div>
</div>

<footer class="py-5 bg-inverse">
        <div class="container">

            <p class="m-0 text-right text-white">Copyright &copy; JuzWeb 2017</p>
        </div>


        <!-- /.container -->
    </footer>
    <script src="js/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<script src="js/app.js" charset="utf-8"></script>
<script src="js/ajax.js" charset="utf-8"></script>
  </body>
</html>

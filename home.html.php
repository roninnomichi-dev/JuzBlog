
<?php
session_start();

include_once 'inc/myconf.php';

include_once 'inc/class.database.php';
$database = new Database();
if(!$database->is_loggedin()) { $database->redirect('index.php');}





if (isset($_POST['user-logout-fp']) && !empty($_POST['user-logout-fp'])) {
  if ($database->doLogout()) {
    $database->redirect('index.php');
  };
}

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
        <a class="nav-link" href="/inc/path.html.php">tests</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="/inc/blogwrite.html.php">write</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">juzweb</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">admin</a>
      </li>
    </ul>

  </div>
<p class="namer"><?php echo $_SESSION['username']; ?></p>
  <button type="submit" class="btn btn-secondary btn-logout" name="user-logout-fp" id="user-logout-fp">Logout <i class="fa fa-hand-peace-o"></i></button>



</nav>
<div class="container-fluid shade main">


        <div class="jumbotron jumbotron-fluid">



        <h1 class="display-2 text-white">hello <?php echo $_SESSION['username']; ?></h1>
        <p class="lead text-white"><b>Here is juzzy's first real attempt at making a blog. It took some real work to cram the knowledge into a rusty, unwilling mind.</b>
        </p>



  </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="container text-xs-center text-white">
        <i class="fa fa-bullhorn fa-5x"></i>      <h3> It's somewhere you can scream your abuse at the cosmos <small>and pretend to yourself that someone might be listening...</small></h3>
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
        <h3 class="card-title">Special title treatment</h3>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>

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

  <h1 class="display-2">Latest Posts</h1><br>
  <h4>What are they talking about in JuzWorld?</h4>
  <div class="row">
    <div class="col-md-8">
    <div class="container">
      <?php  include 'inc/postlink.html.php'; ?>
    </div>

    </div>

<div class="col-md-4">
  <div class="container-fluid">

  </div>
</div>
</div>
</div>

<footer class="py-5 bg-inverse">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; JuzWeb 2017</p>
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

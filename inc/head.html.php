


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
        <a class="nav-link" href="path.html.php">logic tests</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="blogwrite.html.php">write</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="blogwrite.html.php">edit</a>
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
    <button type="button" class="btn btn-logout" name="user-logout-fp">Logout <i class="fa fa-hand-peace-o"></i></button>

</nav>

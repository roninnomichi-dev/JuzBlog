<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/inc/myconf.php';
$page = "register";
require_once $INC_DIR . 'class.database.php';
$database = new Database();

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">

     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="../css/master.css">
     <title>JuzBlog register</title>
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
         <a class="nav-link" href="../index.php">home <span class="sr-only">(current)</span></a>
       </li>

     </ul>
   </div>


 </nav>
<div class="container-fluid header shade text-white">

  <h1 class="display-2">register</h1>
  <p class="lead">
    get yo' ass in here!
  </p>
</div>
<div class="container-fluid">
  <div class="row shade">
    <div class="col-sm-9  text-white">
      <form id="register" name="register" class="form" >
        <fieldset class="form-group">
          <label class="" for="name">handle</label>
          <input class="form-control" type="text" name="name" placeholder="spicy_weener">
        </fieldset>
        <fieldset class="form-group" >
          <label class="" for="email">email</label>
          <input class="form-control" type="email" name="email" placeholder="spicy_weener@email.com">
        </fieldset>
        <fieldset class="form-group" >
          <label class="" for="pwd">password</label>
          <input class="form-control" type="password" name="pwd" placeholder="la la la, not listening...">
        </fieldset>
        <button type="submit" class="btn btn-success" id="reg" name="button-reg" >submit</button>
      </form>
    </div>
    <div class="col-sm-3">
      <div class="sidebar">

        </div>

      </div>
    </div>

</div>
<div class="row shade">
  <div class="col-sm-12">
    <div id="yep" class="alert alert-success alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    <p>You are now a registered JuzBlogger!</p>
    <p>with power comes great responsibility - think b4 u post</p>
<a class="btn btn-success"  href="index.html.php">Lets go log in! <i class="fa fa-thumbs-o-up"></i></a>
    </div>
    <div id="nup" class="alert alert-warning alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    <p>sumthin went wrong!</p>
    <p>time to yell at Juzzy. Its his fault</p>

    </div>
  </div>
</div>
<div class="pad">

</div>
</div>

<?php include $INC_DIR . 'foot.html.php'; ?>

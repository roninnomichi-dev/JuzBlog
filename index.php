<?php
session_start();

include 'inc/myconf.php';

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/master.css">
    <title>Blog-in</title>
  </head>
  <body class="open-sans">



	<div class="container">
    <div class="jumbotron">
      <h1 class="display-4">JuzBlog V0.2</h1>
    </div>

       <form class="form" name="user-login-fp" id="user-login-fp">

        <h2 class="">Log in to JuzBlog.</h2><small>(blog-in?)</small><hr />




        <div id="nup" class="alert alert-danger alert-dismissible fade show" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>

        <p id="errmsg"></p>

        </div>


        <div class="form-group">
        <label for="uname">who are you?</label>
        <input type="text" class="form-control" name="uname" placeholder="your handle" value="<?php if(isset($_COOKIE['remember_me'])){
        echo $_COOKIE['remember_me']; } ?>"
         />
        <span class="formhelp"></span>
        </div>
        <div class="form-group">
          <label for="email">where do we send spam?</label>
        <input type="text" class="form-control" name="email" placeholder="your email" required />
        <span class="formhelp"></span>
        </div>

        <div class="form-group">
          <label for="pwd">secret squirrel stuff</label>
        <input type="password" class="form-control" name="pwd" placeholder="Your Password" />
            <span class="formhelp"></span>
        </div>

     	<hr />
      <div class="form-check">

      <input type="checkbox" class="form-check-input" name="remember_me"  <?php if(isset($_COOKIE['remember_me'])) {
      echo "checked";
      }?> >
      <label id="rmb" for="remember_me">
      Remember me!
      </label>
    </div>
        <div class="form-group">
            <button type="submit" id="btn-login" name="btn-login" class="btn btn-default btn-login">
                	<i class="fa fa-hand-spock-o"></i> &nbsp; SIGN IN
            </button>
        </div>
      	<br />
            <label>Don't have account yet ! <a href="/inc/userin.html.php">Sign Up</a></label>
      </form>
      <div class="progress fade show">
        <div id="progbar-login" class="progress-bar progress-bar-animated progress-bar-striped bg-success " role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      <br>
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

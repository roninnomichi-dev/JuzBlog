<?php
session_start();

	include_once 'inc/class.database.php';
	$session = new Database();
	// if user session is not active(not loggedin) this page will help 'home.php and profile.php' to redirect to login page
	// put this file within secured pages that users (users can't access without login)
if(!isset($_SESSION['user_session']))
	{
		// session no set redirects to login page
		$session->redirect('../index.php');
	}




 ?>

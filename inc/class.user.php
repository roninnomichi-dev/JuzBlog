<?php
//require_once 'inc/class.database.php';



class User
{
public $database;

	    public function __construct() {

				$database = new Database();
				$this->database = $database;
	    }





	public function register($uname,$email,$upass)

	{

		try
		{

			$hash = password_hash($upass, PASSWORD_BCRYPT);
			$database->query('INSERT INTO users (uid, uname, email, hash) VALUES (UUID(), :uname, :email, :hash)');
			//$database->bind(':uid', UUID());
			$database->bind(':uname', $uname);
			$database->bind(':email', $email);
			$database->bind(':hash', $hash);

			$database->execute();
		//return $stmt;
		}
		catch(PDOException $e)
		{
			$error = $e->getMessage();
			return $error;
		}
	}


	public function doLogin($uname,$email,$upass)
	{
		//$database = new Database();
		try
		{
			$this->database->query("SELECT uid, uname, email, hash FROM users WHERE uname=:uname OR email=:email ");
			$this->database->bind(':uname', $uname);
				$this->database->bind(':email', $email);
			$this->database->execute();
			$userRow=$this->database->resultSet();
			$hash = $userRow['hash'];
			if($database->rowCount() == 1)
			{
				if(password_verify($upass, $hash))
				{
					$_SESSION['user_session'] = $userRow['uid'];
					$_SESSION['username'] = $userRow['uname'];

					return true;
				}
				else
				{
					return false;
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}

	public function is_loggedin()
	{
		if(isset($_SESSION['user_session']))
		{
			return true;
		}
	}

	public function redirect($url)
	{
		header("Location: $url");
	}

	public function doLogout()
	{
		session_destroy();
		unset($_SESSION['user_session']);
		return true;
	}

	public function test1() {
		$msg = "hello";
		return $msg;
	}
}
?>

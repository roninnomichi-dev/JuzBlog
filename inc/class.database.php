<?php
class Database {
  private $host = DB_HOST;
  private $user = DB_USER;
  private $pass = DB_PASS;
  private $dbname = DB_NAME;
  public $dbh;
  public $error;
  public $stmt;


  public function __construct(){
   $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
   $options = array(
    PDO::ATTR_PERSISTENT => true,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
);
try {
  $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
} catch (PDOException $e) {
  $this->error = $e->getMessage();
}
  }


  public function query($query){
      $this->stmt = $this->dbh->prepare($query);
  }


public function bind($param, $value, $type = null){
  if (is_null($type)) {
   switch (true) {
     case is_int($value):
       $type = PDO::PARAM_INT;
       break;
     case is_bool($value):
       $type = PDO::PARAM_BOOL;
       break;
     case is_null($value):
       $type = PDO::PARAM_NULL;
       break;
     default:
       $type = PDO::PARAM_STR;
   }
 }
 $this->stmt->bindValue($param, $value, $type);
}

public function execute(){
    return $this->stmt->execute();
}

public function resultset(){
    $this->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
}

public function single(){
    $this->execute();
    return $this->stmt->fetch(PDO::FETCH_ASSOC);
}

public function rowCount(){
    return $this->stmt->rowCount();
}

public function lastInsertId(){
    return $this->dbh->lastInsertId();
}

// transactions
public function beginTransaction(){
    return $this->dbh->beginTransaction();
}

public function endTransaction(){
    return $this->dbh->commit();
}

public function cancelTransaction(){
    return $this->dbh->rollBack();
}

public function debugDumpParams(){
    return $this->stmt->debugDumpParams();
}
// import from class user

public function doLogin($uname,$email,$upass)
{

  try
  {
    $this->query("SELECT uid, uname, email, hash FROM users WHERE uname=:uname OR email=:email ");
    $this->bind(':uname', $uname);
      $this->bind(':email', $email);
    $this->execute();
    $userRow=$this->resultSet();
    $hash = $userRow['hash'];
    if($userRow->$rowCount() == 1)
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

public function doLogout()
{
  session_destroy();
  unset($_SESSION['user_session']);
  return true;
}

public function redirect($url)
{
  header("Location: $url");
}




}
 ?>

<?php
/**
 *
 */
class DbHandler
{
  public $servername;
  public $username;
  public $password;
  public $dbname;
  function __construct($server,$user,$pass,$db)
  {
    $this->servername = $server;
    $this->username = $user;
    $this->password = $pass;
    $this->dbname = $db;

try {
    $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
    // set the PDO error mode to exception
    $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
  }

  public function CreateData($sql)
  {
    try {
      $this->conn->exec($sql);
      return $this->conn->lastInsertId();

    } catch (PDOException $e) {
      return "Error:" . $sql . "<br>" . $e->getMessage();
    }

  }
  public function Readdata($sql)
  {
    try {

    $stmt = $this->conn->prepare($sql);
    $stmt->execute();


    $result = $stmt->Fetchall(PDO::FETCH_ASSOC);
    return $result;
}
  catch(PDOException $e) {
      echo "Error: " .$sql ."<br>".$e->getMessage();
  }
}
  public function Updatedata($sql)
{
  try {
    $stmt = $this->conn->prepare($sql);
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
}
public function deletedata($sql)
{
  try {
      $this->conn->exec($sql);
      echo true;
      }
  catch(PDOException $e)
      {
      echo $sql . "<br>" . $e->getMessage();
      }
}
}



 ?>

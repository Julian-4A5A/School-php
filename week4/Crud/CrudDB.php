<?php
/**
 *
 */


class Dbhandler
{
  public $servername;
  public $username;
  public $password;
  public $dbname;

  function __construct($server,$db,$user,$pass)
  {
    $this->servername=$server;
     $this->dbname=$db;
     $this->username=$user;
     $this->password=$pass;

    try {
       $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
        // set the PDO error mode to exception
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }
    catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
      }

  }

public function createDB($value)
{

}
public function CreateData($value)
{
  try {
    $this->conn->exec($value);
    return $this->conn->lastInsertId();
  } catch (PDOException $e) {
    return "Error";
  }
}
public function ReadData($value)
{
  try {
    $result = $this->conn->query($value);
    $result->execute();
    return $result;

  } catch (PDOException $e) {
    return "Error" . $e->getMessage();
  }
}
public function UpdateData($value)
{
  try {
    $result = $this->conn->exec($value);
    return $result;
  } catch (PDOException $e) {
    return "Error";
  }
}
public function DeleteData($value)
{
  try {
      $result = $this->conn->exec($value);
    return $result;
  } catch (PDOException $e) {
    return "Error";
  }
}

}





 ?>
 <pre>
 <?php
 /*
 $crud = new DbHandler("localhost","dbcrud","root","");
 //Create
 $sql = "INSERT INTO `dbcrud`.`users` (`user_id`, `first_name`, `last_name`, `user_city`) VALUES ('1', 'Firstname',  'Lastname', 'UserCity');";
 echo $crud->CreateData($sql);
 echo " create<br>";
 //Read
 $sql = "SELECT * FROM `users` LIMIT 0, 30 ";
 $res = $crud->ReadData($sql);
 foreach ($res as $row){
 foreach ($row as $key => $val){
 echo "key = $key, val = $val\n";
 }
 }
 echo " read<br>";

 //Update
 $sql = "UPDATE `dbcrud`.`users` SET `first_name` = 'Jack' WHERE `users`.`user_id` = 2;";
 echo $crud->UpdateData($sql);
 echo " update<br>";

 //Delete
 $sql = "DELETE FROM `dbcrud`.`users` WHERE `users`.`user_id` = 1";
 echo $crud->DeleteData($sql);
 echo " delete<br>";
 */
 ?>
 </pre>

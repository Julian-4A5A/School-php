<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>title</title>
<meta name="author" content="name">
<meta name="description" content="description here">
<meta name="keywords" content="keywords,here">
<link rel="shortcut icon" href="favicon.ico" type="image/vnd.microsoft.icon">
<link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
<form class="" action="" method="post">
  <label>Voornaam</label>
  <input type="text" name="Firstname" value=""><br>
  <label>Achternaam</label>
  <input type="text" name="Lastname" value=""><br>
  <label>Stad</label>
  <input type="text" name="City" value=""><br>
  <input type="submit" name="Create" value="Create"><br>
</form>

<?php
require_once('dbclass.php');
$crud = new DbHandler("localhost","root","","school");

if (isset($_REQUEST['Create'])) {
  $Fname = $_REQUEST['Firstname'];
  $Lname = $_REQUEST['Lastname'];
  $City = $_REQUEST['City'];

  //$sql ="INSERT INTO 'users' ('first_name','last_name','user_city') VALUES ('$Fname','$Lname','$City');";
  $sql = "INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `user_city`) VALUES (NULL, '$Fname', '$Lname', '$City');";
  echo  $crud->CreateData($sql);
}

$sql = "SELECT * FROM `users` LIMIT 0, 1 ";
$res = $crud->ReadData($sql);
echo "<table> \n";
echo " <tr> ";
foreach ($res as $row){
	foreach ($row as $key=>$value){

		echo " <th>$key</th> ";

	}
echo " </tr> ";
}


$sql = "SELECT * FROM `users`";
$data = $crud->ReadData($sql);
echo " <tr> ";
foreach($data as $row){
	foreach ($row as $name=>$value){

		echo " <td><input type='text'  name='$name' value='$value'></td>";

	}
  echo "<td><input type='submit' name='btn-update' value='Update'></td>";
  echo "<td><input type='submit' name='btn-delete'  value='Delete'></td>";
  echo " </tr> ";

}
echo "</table> \n";
echo " list all<br>";





?>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="master.css">
<title>Table Stardunks</title>
<script src="js.js" charset="utf-8"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="master.css" type="text/css">
</head>
<body>
  <a href="Create.php">Create Product</a>



<?php
require_once('dbclass.php');
$crud = new DbHandler("localhost","root","","stardunks");

$sql = "SELECT * FROM `products` LIMIT 0, 1 ";
$res = $crud->ReadData($sql);
echo "<div class='col-12'> ";
echo "<table> \n";
echo " <tr> ";
foreach ($res as $row){
	foreach ($row as $key=>$value){

		echo " <th>$key</th> ";

	}
echo " </tr> ";
}


$sql = "SELECT * FROM `products`";
$data = $crud->ReadData($sql);
echo " <tr> ";
foreach($data as $row){


	foreach ($row as $name=>$value){

		echo " <td>$value</td>";

	}
  echo "<td><i class='chrome_reader_mode'><input type='submit' name='read'></i></td>";
  echo "<td><i class='fa fa-edit'><input type='submit' name='update'></td>";
  echo "<td><i class='delete_sweep'><input type='submit' name='delete'></i></td>";
  echo " </tr> ";

}
echo "</table> \n";
echo "</div>";






?>

</body>
</html>

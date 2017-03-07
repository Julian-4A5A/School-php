
<?php
/*
$naam = $_REQUEST["name"];
$number = $_REQUEST["aNumber"];

if isset($_REQUEST['UpdateFile']){
  echo "<pre>";
  var_dump($_REQUEST);
  echo "</pre>";
}
$aNumber = 2.717262818923 * ($number * $number) ;

function HoofdLetter($naam)
{
  return ucwords($naam);
}
for ($i=0; $i < $number ; $i++) {
  print HoofdLetter($naam) . "Heeft voor het getal" . $aNumber."<br>";
}
<label>Naam:</label><br>
<input type="text" name="name" size="15" maxlength="20" required><br>
<label>pick a random number between 1 and 10</label><br>
<input type="number" name="aNumber"  size="8" maxlength="2" required><br>
*/

if (isset($_REQUEST['Create'])){
  echo "Create";
}
if (isset($_REQUEST['Read'])){
  echo "Read";
}
if (isset($_REQUEST['Update'])){
  echo "Update";
}
if (isset($_REQUEST['Delete'])){
  echo "Delete";
}




 ?>

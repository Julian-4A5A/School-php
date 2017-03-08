<?php
$dag;
$date = date("l");
switch ($date) {
  case 'Tuesday':
    $dag = "dinsdag";
    break;

  default:
  $dag = "niet verbonden met internet";
    break;
}
echo "today is $dag";


$timesince = mktime(02,02,00, date("m"), date("d"), date("Y") - 20);

$thedate = date("m/d/Y", $timesince);
echo "<br>current date in 1997: " .$thedate;
 ?>

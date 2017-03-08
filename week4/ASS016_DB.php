<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myPDO";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    $results = $conn->prepare("
    UPDATE
      MyGuests
        SET
          MyGuests.firstname='Julian',
          MyGuests.lastname='van Dijk'
        WHERE
          MyGuests.id = 1
    ");
    $results->execute();
?>

<table>
  <tr>
    <th>firstname</th>
    <th>lastname</th>
    <th>email</th>
    <th>reg_date</th>
  </tr>
<?php

foreach ($results as $row)
{
    echo "<tr>";
    echo "<td>".$row['firstname']."</td>";
    echo "<td>".$row['lastname']."</td>";
    echo "<td>".$row['email']."</td>";
    echo "<td>".$row['reg_date']."</td>";
    echo "</tr>";
}
?>
</table>
<?php


$conn = null;
echo "</table>";

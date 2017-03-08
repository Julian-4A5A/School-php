<?php require 'CrudDB.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Database</title>
  </head>
  <body>
    <table>
      <tr>
        <th>user_id</th>
        <th>first_name</th>
        <th>last_name</th>
        <th>user_city</th>
      </tr>
      <?php
        $crud = new DbHandler("localhost","dbcrud","root","");
        $sql = "SELECT * FROM 'users' LIMIT 0, 30 ";
        $res = $crud->ReadData($sql);


        foreach ($res as $row)
        {
            echo "<tr>";
            echo "<td>".$row['user_id']."</td>";
            echo "<td>".$row['first_name']."</td>";
            echo "<td>".$row['last_name']."</td>";
            echo "<td>".$row['user_city']."</td>";
            echo "</tr>";
        }
        ?>
        </table>




  </body>
</html>

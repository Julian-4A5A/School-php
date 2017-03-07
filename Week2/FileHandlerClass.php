
<?php require 'Switch.php'; ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    form{
      margin-left: auto;
      margin-right: auto;
    }
    input[type=text], select, textarea {
  width: 35%; /* Full width */
  padding: 12px; /* Some padding */
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */

}
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}input[type=submit]:hover {
    background-color: #45a049;
}
    </style>
  </head>
  <body>
    <form name="formOne"  method="post">

      <input type="text" name="Filename" value="" placeholder=""><br>
      <select class="" name="fileA">
        <?php
        foreach (glob("*") as $filename) {
            echo "<option value='$filename'>";
            echo "$filename";
            echo "</option>";
          }
         ?>

      </select><br>
      <textarea name='Context' rows='30' cols= '80'><?php if (isset($file)){echo $file->Read();} ?></textarea>
      <br>
      <input type="submit" name="Go" value="Create">
      <input type="submit" name="Go" value="Read">
      <input type="submit" name="Go" value="Update">


    </form>


  </body>
</html>

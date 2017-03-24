<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Create product</title>
    <script src="js.js" charset="utf-8"></script>
    <link rel="stylesheet" href="master.css" type="text/css">
  </head>
  <body>
    <a href="index.php">Back to Table</a>
    <div id="Create">
      <form class="" action="" method="post">
        <label>Product_type:</label><br>
        <input type="text" name="product_type" value=""><br>
        <label>supplier_id:</label><br>
        <input type="text" name="supplier" value=""><br>
        <label>product_name:</label><br>
        <input type="text" name="Pname" value="" placeholder="1(punt)29"><br>
        <label>product_price</label><br>
        <input type="text" name="price" value=""><br>
        <label>product_detail:</label><br>
        <textarea name="detail" rows="8" cols="8"></textarea><br>
        <input type="submit" name="Create" value="Create"><br>
      </form>
    </div>

    <?php
    require_once('dbclass.php');
    $crud = new DbHandler("localhost","root","","stardunks");

    if (isset($_REQUEST['Create'])) {
      $product_type_code = $_REQUEST['product_type'];
      $supplier_id = $_REQUEST['supplier'];
      $product_name = $_REQUEST['Pname'];
      $product_price = $_REQUEST['price'];
      $other_product_details = $_REQUEST['detail'];



      $sql = "INSERT INTO `products`(`product_type_code`, `supplier_id`, `product_name`, `product_price`, `other_product_details`) VALUES ($product_type_code,$supplier_id,$product_name,$product_price,$other_product_details)";
      echo  $crud->CreateData($sql);
    } ?>
  </body>
</html>

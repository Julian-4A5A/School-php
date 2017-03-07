<html>
    <head>
        <title>Oefening</title>
    </head>
    <body>

    <?php
    $i;
    //This a For loop
    for ($i=0; $i < 11 ; $i++) {
      echo $i. " ";
    }
    $num = 0;
    do {
      $num = $num + 1/2*(1+(sqrt(5)));
      print $num. "<br>";
    }
while ($num < 10);


    ?>

    </body>

</html>

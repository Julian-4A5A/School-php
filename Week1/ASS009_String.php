
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Oefening</title>
  </head>
  <body>
    <?php
    $stringOne = "Php is cool";
    $stringTwo = "Php has many functions";
    $stringthree = "reverse this stringthree";
    $stringFour = strtoupper("hee ik ben lekekr klein"); // uppercase
    $alphabet = "a b c d e f g h i j k l m n o p q r s t u v w x y z";
    $def = stristr($alphabet, 5,6);
    $length = strlen($stringOne); //lengte van de string
    $stringExtracted = substr($stringTwo,0,3); //de eerste letter van de strings
    $stringReversed = strrev($stringthree); //string wordt tegen gespiegeld

    print "<p>$length </p>";
    print "<p>$stringExtracted </p>";
    print "<p> $stringReversed</p>";
    print "<p>$stringFour </p>";
    print "<p>$def </p>";
    ?>
  </body>
</html>

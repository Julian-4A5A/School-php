<html>
    <head>
        <title>Oefening</title>

    </head>
    <body>

    <?php
      $Animal = array("Level 18", "Level 21", "Level 25", "Level 30 en zit in Bronze II", "level 30 en zit in Silver II");
      print "Dit account is " . $Animal[3];

      $Animal[1] = "Level 22";
      print "<br>Dit account is " . $Animal[1];
      $Animal[3] = "Level 30 en zit in Bronze I";
      print "<br>Dit account is " . $Animal[3];

      $car = array("naam" => "bliksem mqueen", "kleur"=>"rood");
      print "<br>de film cars heeft de auto" . $car["naam"]. "en is ".$car["kleur"];

    ?>

    </body>

</html>

<html>
    <head>
        <title>Oefening</title>
    </head>
    <body>

    <?php
$aNumber = 5;
$plant = "cactus";
if ($aNumber == 5){
    print "het nummer is inderdaad 5 ja :D happy" ;
}
if ($plant == "cactus"){
  print "<br> Great choice";

}else{
  print "Het is geen cactus helaas";
}
if($aNumber == 7){
  print "hee 7";
}elseif ($aNumber == 4) {
  print "het het is 4";
}else {
  echo "Hee <br>";
}
switch ($aNumber) {
  case 1:
    print "aNumber is 1";
    break;
  case 2:
    print "aNumber is 2";
    break;
  case 3:
    print "aNumber is 3";
    break;
  default:
    print "aNumber is niet in de lijst<br>";
    break;
}
$number;
#Ternary Loop
$number = ($aNumber==4) ? 6:15;
print "number = " . $number;
    ?>


    </body>

</html>

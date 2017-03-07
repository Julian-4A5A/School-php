<html>
<body>
<?php
$teamName = "Inverion";
$teamState = "Connectusi";
$numWins = 12;
$numLoses = 2;

print "The name of the team is ".$teamName."<br>The team is from ".$teamState."<br>".$teamName." has won ".$numWins." and lost " . $numLoses." games";

function printMessage($Message, $name){
    print "<br>" . $Message. $name. " <br>Ja gaat goed";
}
printMessage("Hee hoe gaat het ", "Julian");
?>
</body>
</html>
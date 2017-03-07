<html>
    <head>
        <title>Oefening</title>

    </head>
    <body>

    <?php
/**
 * Een moet titel en pagina's
 */
class Book{
  var $Title;
  var $numPages;
  var $hoofdStukken = array();

  function __construct($BookTitle, $Pages)
  {
    $this->Title = $BookTitle;
    $this->numPages = $Pages;
  }

    function setNumPages($numPages){
      $numPages = $numPages;
    }
    function getNumPages(){
      return $numPages;
    }
    function setTitle($Title)
    {
      $Title = $Title;
    }
    function getTitle()  {
      return $Title;
    }
    function SetInhoud($hoofdstukken)
    {
      echo "<p><h1>Inhoudsopgave</h1></p>";
      for ($i=0; $i < ; $i++) {
        echo $hoofdstukken[$i]."<br>";
      }
    }
}

$yellowPages = new Book("De maat staaf", 201);
$yellowPages->SetInhoud("hoofdstuk 1"=>"het begin van de staaf", "hoofdstuk 2"=>"het einde van de staaf")
print $yellowPages->numPages;
print $yellowPages->Title;
print $yellowPages->SetInhoud();
    ?>

    </body>

</html>

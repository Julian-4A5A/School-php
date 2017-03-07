<?php
/**
 * File CRUD
 */
class FileHandler
{
  public $fileName;
  public $fileExtension;
  public $fileSize;
  public $array

  function __construct($fileName){
  $this->fileName = $fileName;

}
    public function Create()
    {
      $file = fopen($this->fileName,"a");
    }
  public function Read()
  {
    $content  = file_get_contents($this->fileName);
    return $content;
  }
  public function Update($fileText)
  {
    $content = $fileText;
    $file = fopen($this->fileName, "w");
    $Update =fwrite($file, $content );
    return $Update;

  }
  public function Delete()
  {
  $delete =   unlink($this->fileName);
  return $delete;
  }
  public function MultiMake($array)
  {foreach ($array) {

  }

  }
  }






 ?>

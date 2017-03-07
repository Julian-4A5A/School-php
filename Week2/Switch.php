<?php require 'FileHandler.php'; ?>
<?php
if (isset($_REQUEST['fileA'])&& isset($_REQUEST['Filename'])&& isset($_REQUEST['Context'])) {
  $fileA = $_REQUEST['fileA'];
  $Filenam = $_REQUEST['Filename'];
  $text = $_REQUEST['Context'];
}
switch ($_REQUEST['Go']) {
 case 'Create':
  $file = new FileHandler(Filenam);
  $file->Create();
    break;
 case 'Read':
  $file = new FileHandler(FileA);
  $file->Read();
    break;
 case 'Update':
  $file = new FileHandler(FileA);
  $file->Update($text);
    break;
  default:
    # code...
    break;
}
?>

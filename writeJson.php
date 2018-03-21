<?php
  $control = "";
  $jsonFile = "drawing.json";

  if(!empty($_GET['put'])){
    $control = $_GET['put'];
  }
  $file = fopen($jsonFile, "w") or die("No file at path");
  fwrite($file, $control);
  fclose($file);
?>

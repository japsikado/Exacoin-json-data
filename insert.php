<?php
  if(isset($_POST['data'])) {
    $json = $_POST['data'];
    $myfile = fopen("log.txt", "a+") or die("Unable to open file!");
    $txt = $json.PHP_EOL;
    fwrite($myfile, $txt);
    rewind($myfile);
    fclose($myfile);

    $jsonFile = "general.json";
    $fh = fopen($jsonFile, 'w') or die("can't open file");
    $stringData = $_POST["data"];
    fwrite($fh, $stringData);
    fclose($fh);
  } else {
    echo "Noooooooob";
  }
?>

<?php 
$fileName =  "ceva.txt";
$fisier = fopen($fileName,"r+") or die("unable to open file!");

$read = fread($fisier,filesize($fileName));
$new = "CATEL";
$writefile = fwrite($fisier, $new);
echo $read;
fclose($fisier);



?>

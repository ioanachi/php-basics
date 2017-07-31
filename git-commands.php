<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$status = ["git status","sa vezi statusul modificarilor"];
$commit = ["git commit -a -m \"mesaj\"","ca sa salvezi starea codului"];
$push = ["git push","ca sa trimiti toate commiturile la server"];
$add = ["git add .","ca sa adaugi fisierele noi ce nu exista"];
$comands = [$status,$commit,$push,$add];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Comands</title>
</head>
<body>
<ul>
<?php
foreach ($comands as $key => $value) {
	echo "<li><b>".$value[0]."</b> - ".$value[1]."</li>";

}
?>


</ul>
</body>
</html>
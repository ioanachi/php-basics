<?php 
 $nr1 = 0;
 $nr2 = 0;
 $rezult = 0;
if (isset($_GET["A"])){
	$nr1 = $_GET["A"];
}
if (isset($_GET["B"])) {
	$nr2 = $_GET["B"];
}
if (($nr1/$nr2)%2 = 0) {
	echo 'Bun!';
}
	if (($nr2/$nr1)%2 = 0) {
	echo 'Bun si asa';
}
if (($nr2-$nr1) = ($nr1/$nr2)) {
	echo 'Foarte Bun';}
if ($nr1 === 0) {
	echo 'A e gol';}
if ($nr2 === 0) {
	echo 'B e gol';}
?>
<!DOCTYPE html>
<html>
<head>
	<title>TAsk 3 </title>
</head>
<body>
	<form method="Get" action="Task3.php">
<b>A</b>
<input type="text" name="A" /><br><br>
<b>B</b>
<input type="text" name="B" /><br><br>
<b>try</b>
<input type="submit" value="rezult" />
</body>
</html>
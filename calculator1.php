<?php 


$A = 0;
$B = 0;
$C = 0;

if (isset($_GET["Textbox1"])) {
	$A = $_GET["Textbox1"];
}

if (isset($_GET["Textbox2"])) {
	$B = $_GET["Textbox2"];
}
if (isset($_GET["Textbox3"])) {
	$C = $_GET["Textbox3"];
}
$rezultat = (($A+$B)/2) - ($C * 2)*100;

?>
<h4>((A+B)/2) - (C * 2)*100 = <?php echo $rezultat;?></h4>
<!DOCTYPE html>
<html>
<head>
	<title>Task 2</title>
</head>
<body>

<form method="GET" action="calculator1.php">


<b>A =</b>
<input type="text" name="Textbox1" />
<b>B =</b>
<input type="text" name="Textbox2" />
<b>C =</b>
<input type="text" name="Textbox3" /><br><br>
<input type="submit" value="Rezultatul" />


</form>




</body>
</html>







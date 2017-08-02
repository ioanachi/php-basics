
<?php 




$nume = "";
$prenume = "";
$sex = "";

if (isset($_GET["Nume"])) {
$nume = $_GET['Nume'];
}
if (isset($_GET["prenume"])) {
$prenume = $_GET['prenume'];
}
if (isset($_GET["sex"])) {
$sex = $_GET["sex"];
}



echo "Persoana noastra este".":     ".$nume."    ".$prenume."<br>";
if ($sex == "on") {
echo "a ales sex";
}








?>

<!DOCTYPE html>
<html>
<head>
	<title>Formular</title>
</head>
<body>
<form method="GET" action="form.php">

<b>Nume</b><br>
<input type="text" name="Nume" /><br><br>

<b>Prenumele</b><br>
<input type="text" name="prenume" /><br><br>

<b>Yes</b><br>
<input type="checkbox" name="sex" /><br><br>


<input type="submit" value="push me" />


</form>







</body>
</html>




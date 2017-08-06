<?php

/*
#  Generate Dynamic php

You have the following array: 
```$ArrX = ['Mara','are','mere','multe'];```

Please add the values of the array as values for a dropdown box (select input field):


USe task17.php as a already prewritten file

### Exemple of a select field with data in it
```


*/

$ArrX = ['Mara','are','mere','multe'];

echo "<select name=\"Myselection\">";
for ($i=0; $i < count($ArrX); $i++) { 
	echo "<option>".$ArrX[$i]."</option>";
}
echo "</select>";


echo "<br>"."<br>"."<br>"."<br>";



echo "<select name=\"Myselection\">";
for ($i= 0; $i < count($ArrX); $i=$i+2) { 
	echo "<option>".$ArrX[$i]." ".$ArrX[$i+1]."</option>";
}
echo "</select>";



?>
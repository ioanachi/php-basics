<?php
/*# Array Sort

You have the following array:

```$arrx = [1,5,2,9,7,4,10,11,3,6,8];```

**TASK**

Find a way to turn that into 

```[1,2,3,4,5,6,7,8,9,10,11]```

Basically, you have to sort the array contents.

**You don't have to output anything and show on the screen. Just have $arrx be sorted like above.**

Good luck!
*/
$arrx = [1,5,2,9,7,4,10,11,3,6,8];
$i = 0;


$d = count($arrx) -1;
while ($i < $d) {
	$j = $i +1;

	if ($arrx[$i] < $arrx[$j]) {
		$c = $arrx[$j];
		$arrx[$j] = $arrx[$i];
		$arrx[$i] = $c;
echo "<pre>".print_r($arrx);
	}
	$i++;
}
$a ="xasd";
$b ="aaa";
$c = $b;
$b=$a;
$a=$c
?>
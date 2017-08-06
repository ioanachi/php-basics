<?php
/*# Array remove index

You have the following array:

```$arrX = ['everything', 'works','as',it','should'];```

Your task is to remove index 2,3 and 4 from the array

The final array should look like this:

 
```$arrX = ['everything', 'works'];```*/


$arrX = ['everything', 'works','as','it','should'];
$length = count($arrX);

for ($i=2; $i <= $length-1; $i++) { 
	 unset($arrX[$i]);
	 echo $i;
}

echo "<pre>";
print_r($arrX);
/*
unset($arrX[2]);
var_dump( $arrX);
*/

?>
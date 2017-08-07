<?php
/*# Multiple Functions

Create 2 functions. You can choose their names.

* One function has to return the sum of 2 numbers that you give to the function as parameters.
* The other function Must use the first function and return the arithmetic average of 2 numbers. Again. parameters.

**Hint and Example usage:**

```
Function addNrs($a,$b){
// Your code here
}

function arithAvg($a,$b){
// Your code here
}

$final = arithAvg(10,6);
echo $final; //returns 8
```*/
Function addNrs($a,$b){
$sum = $a + $b;
return $sum;
}

function arithAvg($a,$b){
  $sumf = addNrs($a,$b);
  $arith = $sumf/2;
  return $arith;
}
$final = arithAvg(10,6);
echo $final;





 ?>

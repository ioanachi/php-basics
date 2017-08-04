<?php
/*# task 11, differently

Do task 11 again, but use a while loop and logic. No function that does everything
*/



$characters = ['a','b','c','d','x','y','lalala','a','b','c','d','x','y','lalala','a','b','c','d','x','y','lalala'];
$i = count($characters);
$a = $i-1;
while ($a >= 0 ) {
	echo $characters[$a];
	 $a--;
}
?>
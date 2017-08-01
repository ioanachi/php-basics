<?php 


$i = 1;
while ($i<100) {
if (($i%3 ==0)&&($i%5 == 0)) {
	echo $i."-"."fizzbuzz"."<br>";
}
elseif ($i%5 == 0){
	echo $i."-"."buzz"."<br>";
}
elseif ($i%3 == 0){
	echo $i."-"."fizz"."</br>";
}
else {
	echo $i."<br>"
	;
}
$i++;
}

// if ($i%5) {
	// echo $i."-".buzz"
// }
// else echo $i;
// }
















?>
<?php 


$i = 0;
while ($i<100) {
$i++;
if (($i%3 ==0)&&($i%5 == 0)) {
	echo $i."-"."fizzbuzz"."<br>";
	continue;
}
if ($i%5 == 0){
	echo $i."-"."buzz"."<br>";
	continue;
}
if ($i%3 == 0){
	echo $i."-"."fizz"."</br>";
	continue;
}

	echo $i."<br>";
}

















?>
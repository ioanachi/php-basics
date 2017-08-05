<?php
/*You have the following array:

$arrA = [2,1];

Turn the array into [1,2] programatically withouth knowing their values*/


$arrA = [2,1];
$c = $arrA[0];

$arrA[0] = $arrA[1];
$arrA[1] = $c;

"<pre>" print_r($arrA);







?>
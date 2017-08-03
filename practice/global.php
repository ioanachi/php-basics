<?php

$x = "z";


function functiaA(){
  $x="a";
  echo $x;
}
$x="b";
echo $x;
functiaA();
$x="c";
functiaA();


/////////////
echo "<br/>";
echo "<br/>";


//-------------
$a = "nimic,";
function functiaB(){
  // global $a;
  $a = "x";
  $b = $a."mara";
  // echo $b;
}
functiaB();
echo $a;

?>

<?php
function treivar($a,$b,$c){
$var = ",";
while($a<$b){
 if($a%$c == 0){
   echo $a.$var;
  }
  $a = $a+1;
}

}
// treivar(1,20,4);

function asd($a){
  return $a." atat";
}

echo asd("mama");
?>

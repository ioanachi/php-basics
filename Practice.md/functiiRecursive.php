<?php

function adaugaPanaLa($start,$x){
  if($start < $x){
    $start++;
    return adaugaPanaLa($start,$x);
  }
  return $start;

}

echo adaugaPanaLa(0,100);


?>

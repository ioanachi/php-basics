<?php

$arr = ["asd","sdf","aaa","asd","sdf","aaa","asd","sdf","aaa",
"asd","sdf","aaa","asd","sdf","aaa","asd","sdf","aaa"];


for ($i=0; $i < count($arr); $i++) {
  // echo $arr[$i].",";
}

foreach ($arr as $key => $value) {
  echo "arr[".$key."]=".$value."<br/>";
}
// echo "<pre>";
var_dump($arr);
echo "testing";

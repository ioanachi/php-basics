<?php
//$arr = array("one", "two", "three");
//reset($arr);
//while (list(, $value) = each($arr)) {
  //  echo "Value: $value<br />\n";
//}

//foreach ($arr as $value) {
  //  echo "Value: $value<br />\n";
//}


$arr = array("one", "two", "three");
reset($arr);
//while (list($key, $value) = each($arr)) {
  //  echo "Key: $key; Value: $value<br />\n";
//}

foreach ($arr as $key => $value) {
    echo "$key;$value <br />\n";
}
?>






?>
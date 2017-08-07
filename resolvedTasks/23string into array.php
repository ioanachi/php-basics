<?php
/*# Array to String Comma

Documentation on functions in PHP: https://www.w3schools.com/php/php_functions.asp

Repeat the task 22, but this time, the string characters are separated by a **coma** like so: ```,```. Here's an example:

```$result = stringToArray('a,b,c,d,e');```
result will be:
```$result = ['a','b','c','d'];```*/

function stringtoArray($a){
$b = str_split($a);
for ($i=0; $i < count($b) ; $i=$i+2) {
  echo $b[$i];
  # code...
}
}
$e = stringtoArray('a,b,c,d,e,f');
echo "<pre>";
print_r($e);




 ?>

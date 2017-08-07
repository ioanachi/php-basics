<?php
/*# Functions use

Reading Refference on functions in php https://www.w3schools.com/php/php_functions.asp

You previously completed task22

Create a function that has a variable that will contain the string. The function will return the array. Basically, I'm giving a string to a function with 1 parameter and it will return an array of that string.

**Final result**

If I call the function that you create like this:

```$result = yourFunction('abc');```
```$result``` will be: ```['a','b','c']```

You must create the function ```stringToArray``` make the functionality to return the array object after you convert it, the result being the above example.

*/
function yourFunction($a){
  $b = str_split($a);
  return $b;
}


$x = yourFunction('abcdefghijklmnopqrstuvxyz');
echo "<pre>";
print_r($x);










 ?>

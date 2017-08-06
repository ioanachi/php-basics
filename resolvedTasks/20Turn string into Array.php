<?php
/*
# Turn string into array

You have the followingvariable containing the following string:

```$str = 'abcdefghijklmnopqrstuvxyz';```

Your mission is to turn that string into an array. The final result must look like this:


```$arrX = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','x','y','z'];```
*/
$str = 'abcdefghijklmnopqrstuvxyz';

$arr = str_split($str);
echo "<pre>"; 
print_r($arr);



?>

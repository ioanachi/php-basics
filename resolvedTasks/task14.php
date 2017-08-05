<?php

/*append to array

This is a 2 part task:

### Part 1 

You have the following array:

```$arr = ['a','b','c'];```

The array has 3 values. Your task is to add a 4'th value. At the end, The following command will work like this:

```echo $arr[3];``` Will show ```d```

**Hint** Use a function to add (append) the parameter to the array 

# Part 2

You have the following array:

```$arr = ['a','b','c'];```

Add the following array values to it:

```$arr = ['d','e','f'];```

**FINAL**
Check out task 14.php to see the code you will have to add to solve both parts.
# */

//the array
$arr = ['a','b','c'];
array_push($arr, 'd');
$var = [$arr, 'd'];
var_dump($var);


// Just adding some space between the output of parts of this task:
/*echo "<br/><br/>";

$arr = ['a','b','c'];
$arrB = ['d','e','f'];

// this must output a-b-c-d-e-f
foreach($arrC as $key => $value){
  echo $value."-";
}
888*/
?>

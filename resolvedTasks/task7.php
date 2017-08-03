<?php
/*# Arrays Part 4

# TASK:

You have the following array:
```
$numbers = ['a','b','c','asd','mara','x'];
```
You need to show the values of the array, separated by a ```-```

**EXAMPLE OUTPUT:**
``` a,b,c,asd,mara,x```


you will have task7.php available in the resolvedTasks Directory with pre-written code and coments on where to write your code for your task
*/

//the array you will use
$numbers = ['a','b','c','asd','mara','x'];
echo $numbers[0];
$i = 0;
while($i< count($numbers)){
echo $numbers[$i];
  $i++;
}

?>

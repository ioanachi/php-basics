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


# Arrays part 6

Exactly like task 7 but with a **for** loop (not foreach)
*/

//the array you will use
$numbers = ['a','b','c','asd','mara','x'];
$slot = count($numbers);
for ($i=0; $i < $slot; $i++) { 
	echo $numbers[$i];
}
?>
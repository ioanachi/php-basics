<?php

/*
#  Generate Dynamic php

You have the following array: 
```$ArrX = ['Mara','are','mere','multe'];```

Please write dinamically like this:

```
<p>Mara</p>
<p>are</p>
<p>mere</p>
<p>multe</p>
```

USe task17.php as a already prewritten file


*/

$ArrX = ['Mara','are','mere','multe'];
/*
foreach ($ArrX as $key => $value) {
	echo "<p>".$value."</p>";
}
*/


for ($i=0; $i < count($ArrX); $i++) { 
	echo "<p>".$ArrX[$i]."</p>";
}





?>
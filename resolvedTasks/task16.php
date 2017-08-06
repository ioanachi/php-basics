<?php
/*# Array Push again

You have the following array:

```$arrX = [1,2,3,4,5,6,7,8,9,10];```

You also have the following empty arrays:

```$Pare = [];```
and
```$Impare = [];```

programatic, pune numerele pare din ```$arrX``` in ```$Pare``` si numerele impare in ```$impare```

rezultatul trebuie sa arate asa:

```
$Pare = [2,4,6,8,10];
$impare = [1,3,5,7,9];
```
*/

$arrX = [1,2,3,4,5,6,7,8,9,10];
$pare = [];
$impare = [];
//var_dump($arrX);
$c = [];
$i = 0;
$a = count($arrX)-1;
while ($i<=$a) {
if ($arrX[$i]%2 == 0) {
	array_push($pare,$arrX[$i]);
}
else array_push($impare, $arrX[$i]);
$i++;

}

var_dump($pare);
var_dump($impare);










/*foreach ($arrX as $key => $value) {
 $value%2 == 0;
	  array_push($pare, $value);
}


foreach ($arrX as $key => $value) {
$c = $value%2;
	 $c !== 0;
	  array_push($impare, $c);
}

*/




?>
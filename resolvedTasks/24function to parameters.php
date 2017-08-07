<?php
/*
# Function Parameters
Reading Refference on functions in php https://www.w3schools.com/php/php_functions.asp

**TasK**

Make a function with 3 parameters: 2 manditory and 1 optional (the last one is optional.
When I call the function like this:

```showMeFunc('Ciprian','Turcu',30);```

The result should look like this;

```
Name: Turcu
Surname: Ciprian
Age: 30
```
If I call it withouth the third parameter, like so:

```showMeFunc('Ciprian','Turcu');```

Then it should output like this:

```
Name: Turcu
Surname: Ciprian
Age: Unknown*/
function showMeFunc($a){
echo 'Name'.':'.$a[0]."<br>";
echo 'Surname'.':'.$a[1]."<br>";
if (isset ($a[2])) {
  echo 'Age'.':'.$a[2];
}

  else {
    echo 'Age'.':'.'Unknown';
}
}

$arr = ['Turcu','Ciprian'];
showMeFunc($arr);



 ?>

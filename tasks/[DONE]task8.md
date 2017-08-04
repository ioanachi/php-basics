# Arrays Part 5

An array has a key and a value. By default, the keys are integers
ex:
```$arr = ['a','b','c','d'];```
* For the value 'a' the key is 0
* For the value 'b' the key is 1
* For the value 'c' the key is 2
etc.
In this way, we can get the values based on the key
ex:
* ``` echo $arr[0];``` Will return 'a'
* ``` echo $arr[1];``` Will return 'b'
* etc

Keys can be declared. Ex:
```$arr=[0=>'a',1=>'b',2=>'c');```
The keys can also be strings. Ex:
```$arr=['new'=>'a','name'=>'b','yes'=>'c');```
In this way, ``` echo $arr['new'];``` will output ```a``` 

**TASK:**

1. create an array with these keys and values:
```
name: Chichernea
Surname: Ioana
age: 30
```
2. Print the values of the array one above the other
ex output:
```
Chichernea
Ioana
30
```


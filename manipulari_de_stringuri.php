<?php 

// $poveste = "Mara are mere";
// // $count = 2;
// // $poveste = substr_replace($poveste,'i',3);


// $poveste = substr($poveste,0,7);






// echo $poveste;

$story = "If start is non-negative, the returned string will start at the start'th position in string, counting from zero. For instance, in the string 'abcdef', the character at position 0 is 'a', the character at position 2 is 'c', and so forth.";


$count = strlen($story);
$start = $count/2;


$story = substr($story,$start,$count);

echo $story."...";








?>
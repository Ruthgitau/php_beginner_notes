<?php
/* --------- Array Functions --------*/
//1.Function to get an array length
$fruits=["banana" ,"mango","apple","watermelon","strawberry","orange","pear","coconut","guava","cherry"];
//echo count($fruits );

//function to search ele ments in an array
echo in_array("pineapple", $fruits);

//function to add elements in an array
$fruits[]="pineapple";//method 1
array_push($fruits ,"kiwi","thornmelon", "dates");
//var_dump($fruits);


//function to remove an element from an array
//pop--removes the last item in an array
array_pop($fruits);
//shift--removes first element in an array
array_shift($fruits);
//unset--removes any specific element mentioned
unset($fruits[0]);

print_r($fruits);


/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

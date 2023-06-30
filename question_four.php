<?php
$temperature=array(78,60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$number=count($temperature);
$total=array_sum($temperature);
$average=$total/$number;
echo "The Average Temperature is $average <br><br>";

   
sort($temperature);
$lowest_seven=array_slice($temperature,0,7);
//var_dump($lowest_seven);
echo implode("", $lowest_seven); 
echo "<br><br>";
$highest_seven=array_slice($temperature,23,30);
// var_dump( $highest_seven);
echo implode("", $highest_seven);


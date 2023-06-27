<?php
/*Write a php program to print hello world using variables.*/
$x="Hello World";
echo $x;
echo "<br>";

/*.Write a php program to show the current month using switch*/
$month = date('m');

switch ($month) {
    case 1:
        echo "The current month is January.";
        break;
    case 2:
        echo "The current month is February.";
        break;
    case 3:
        echo "The current month is March.";
        break;
    case 4:
        echo "The current month is April.";
        break;
    case 5:
        echo "The current month is May.";
        break;
    case 6:
        echo "The current month is June.";
        break;
    case 7:
        echo "The current month is July.";
        break;
    case 8:
        echo "The current month is August.";
        break;
    case 9:
        echo "The current month is September.";
        break;
    case 10:
        echo "The current month is October.";
        break;
    case 11:
        echo "The current month is November.";
        break;
    case 12:
        echo "The current month is December.";
        break;
    default:
        echo "Month not available";
        break;
}

echo "<br>";

/*Write a php program to add numbers*/
//using variables
$a=6;
$b=9;
$sum=$a + $b;
echo $sum;

echo "<br>";
//using a function
function add($x, $y){
    $c=$x +$y;
    echo $c;
}
add(4,6);


echo"<br>";
/*Write a php program that calculates the area of a circle */
const pi=3.142;
function area( $radius){
    $area_of_circle=$radius*$radius*pi;
    echo $area_of_circle;
}
area(6);


echo"<br>";
/* Write a php program to reverse the string technology */
$string="technology";
echo strrev($string);




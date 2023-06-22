
<?php
/*. QUESTION 1
$color = array('white', 'green', 'red'')
Write a PHP script which will display the colors in the following way :
Output :
white, green, red,
 green
 red
 white
*/

$color=array("white","green","red");
asort($color);
foreach ($color as $value){
echo ("$value <br>");
}


/*QUESTION 2
. $x = array(1, 2, 3, 4, 5);
Delete an element from the above PHP array. After deleting the element, 
integer keys must be normalized.
Sample Output :
array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }
array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) }*/
$x=array(1,2,3,4,5);
var_dump($x);
echo("<br>");
unset($x[3]);
var_dump($x);
echo("<br>");

/*QUESTION 3
. Write a PHP script that inserts a new item in an array in any position.
Expected Output :
Original array :
1 2 3 4 5
After inserting '$' the array is :
1 2 3 $ 4 5
*/
$org=array(1,2,3,4,5);
echo implode($org);
echo("<br>");
array_splice($org,3,0,"$");
echo implode($org);
echo("<br>");



/*QUESTION 4
. Write a PHP script to calculate and display average temperature, five 
lowest and highest temperatures.
Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 
76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
Expected Output :
Average Temperature is : 70.6
List of seven lowest temperatures : 60, 62, 63, 63, 64,
List of seven highest temperatures : 76, 78, 79, 81, 85,
*/
$temperature=[78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 
    76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
$sum=array_sum($temperature);

$number=count($temperature);
$average=$sum/$number;
echo("Average Temperature is: $average<br>");
sort($temperature);
$lowest7=array_slice($temperature,0,7);
echo implode(" ",$lowest7);
echo"<br>";
$highest7=array_slice($temperature,23,30);
echo implode(" ",$highest7 );
echo "<br>";



/*QUESTION 5
5. Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be 
no hyphen(-) at starting and ending position.
*/
for($a=1; $a<=10; $a++){
    if ($a<10){
        echo "$a-";
    }
    else{
        echo "$a". "\n";
        echo"<br>";
    }
}


/*QUESTION 6
 Create a script using a for loop to add all the integers between 0 and 30 
and display the total.
*/
$total=0;
for($y=1;$y<=30;$y++){
    $total += $y;
}
echo $total;

echo"<br>";



/*QUESTION 7
Create a script to construct the following pattern, using nested for loop.*/
for ($a=1;$a<=5;$a++){
    for  ($b=1;$b<=$a;$b++){
    echo "*<br>";

}
}



/*QUESTION 8
Write a PHP script using nested for loop that creates a chess board as 
shown below.
Use table width="270px" and take 30px as cell height and width.*/



/*QUESTION 9
. Write a PHP program to compute the sum of the two given integer values. 
If the two values are the same, then returns triple their sum.
Sample Input
1, 2
3, 2
2, 2
Sample Output:
3
5
12 */
function numbers($num1,$num2){
    $sum=$num1+$num2;
    $triplesum=$sum * 3;
    if($num1 != $num2){
        echo $sum;
    }
    else{
        echo $triplesum;
    }
}
numbers(4,4);











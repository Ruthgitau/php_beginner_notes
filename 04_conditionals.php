<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators -----------
Operators are special characters or symbols that are used to perform operations on statements or operands.
---types of operators---
Mathematical operatirs-are operators used to carry out mathematical operations.
*/
$desks=20;
$chairs=30;
$furniture= $desks +$chairs;
echo "$furniture<br>";

/*Logical Operators
AND--(||)executes if both conditions are met
OR(&&)--executes if either or both conditions are met
NOT(!)refuses the current state
/*


/*--Comparison operators--
used to compare 

*/
/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/



/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$team1=89;
$team2=84;
if($team1>$team2){
  echo "Team 1 is greater !!<br>";
}

/*if else statement*/
if($team1<$team2){
  echo "Team 1 is greater !!<br>";
}
else{
  echo"Team 2 is gretaer !!<br>";
}

//if..else..if
$age=50;
if($age <30){
  echo"age is less than 30";
}
elseif($age>30 && $age<40){
  echo"age is between 30 and 40";
}
elseif($age>40 && $age<50){
  echo"age is between 40 and 50";
}
else{
  echo"age is greater than 50<br>";
}

//write a simple php code to check whether one is eligible to vote or not
$voter=18;
if($voter<18){
  echo"voter not eligible to vote<br>";
}
else{
  echo"voter is eligible to vote<br>";
}

//write a php program to check whether a number is positive negative or a zero
$num=5;
if($num>0){
  echo"number is positive";
}
elseif($num<0){
  echo"number is negative";
}
else{
  echo"number is zero";
}


/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/


/* -------- Switch Statements ------- */

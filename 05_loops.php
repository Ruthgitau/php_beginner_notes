<?php
//control structures are divided into control statements and loops.
//control statements are basd on a true or false basis
//a loop is a conditional statement  that repeats itself until a certain condition becomes false

/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------
allows the user to put all the looprelated statements that is(initialization;condition/test; ++/ --)
*/

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }

*/

for($count=1;$count<=5;$count++){
  echo"number is :$count<br>";
}


/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/

$num=1;
while ($num<=5) {
  echo "increment number :$num<br>";
  $num ++;
}



/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/
$value=30;
do{
  echo "increment number by :$value <br>";
  $value++;
}
while($value<=20);



/* ---------- Foreach Loop ----------  */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

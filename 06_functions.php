<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/

function hellomessage(){
  echo "hello world<br>";
}
hellomessage();

function myname($fname, $lname){git
  $mename=$fname . $lname;
  echo $mename;
}
myname("Ruth", "Gitau");

//addition function
function addingfunction($num1, $num2){
  $sum=$num1 + $num2;
  echo "$sum<br>";

}
//subtracting function
function subfunction($no1, $no2){
  $sub=$no1-$no2;
  echo"$sub<br>";
}
//multiplying function
function mult($n1,$n2){
  $mul=$n1*$n2;
  echo"$mul<br>";         
}
mult(4,5);


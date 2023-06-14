<?php
/* ------------ Sessions ------------ */

/*
  Sessions are a way to store information (in variables) to be used across multiple pages.
  Unlike cookies, sessions are stored on the server.
*/

$voter=readline("Enter voter's age");
if($voter<18){
  echo"voter not eligible to vote<br>";
}
else{
  echo"voter is eligible to vote<br>";
}

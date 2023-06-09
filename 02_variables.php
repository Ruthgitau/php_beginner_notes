<?php

/* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name="Ruth Gitau";
$age=19;
$gender="Female";
$fav_food="Chapati";
echo "My name is $name. I am $age years old.I am a $gender and love taking $fav_food.<br>";

$cars=8;
$mum_cars=2;
$bro_cars=2;
$dad_cars=1;
$remaining_cars=$cars-($mum_cars+$bro_cars+$dad_cars);

echo "Joseph remained with $remaining_cars cars";


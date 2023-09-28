<?php

/* OPERATORS PART 1*/
/*
  Unary operators only take in one value
  Binary operators take two values 
  Ternary operator accepts three values
*/

// Arithmetic Operators (+ - * / % **)
$x = 10;
$y = 2;

// var_dump($x / $y);
// mod operations
// var_dump($x % $y);
var_dump(fmod($x, $y));
// ------------------------------------------------------------------------------

// Asignment Operators (= += -= *= /= %= **=)
// used just to asign values
$x = 5;
$x = $y = 10;
$x = ($y = 10) + 5;
$x *= 3;
var_dump($x, $y);
// ------------------------------------------------------------------------------

// String Operators (. .=)
$x = 'Hello';
$x .= ' World'; 
echo $x;
// ------------------------------------------------------------------------------

// Comparison Operators (== === /= <> < > << >> <==> ?? ?:)
$x = 5;
$y = 3;
// loose comparison is does the type converison for you
var_dump($x == $y);
// strict comparison compares the data type and value
var_dump($x == $y);
// check out the other operators
// ------------------------------------------------------------------------------

// Error Control Operators (@)
// ------------------------------------------------------------------------------

// Increment/Decrement Operators (++, --)
// ------------------------------------------------------------------------------

// Logical Operators (&& || ! and or not)
// ------------------------------------------------------------------------------

// Bitwise Operators (& | ^ ~ << >>)
// ------------------------------------------------------------------------------

// Array Operators (+ = =/= <> )
// ------------------------------------------------------------------------------

// Execution Operators (``)
// ------------------------------------------------------------------------------

// Type Operators (instanceof)
// ------------------------------------------------------------------------------

// Nullsafe Operator - PHP8 (?)
// ------------------------------------------------------------------------------
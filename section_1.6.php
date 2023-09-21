<?php 

/* INTEGERS */

// check the highest integer possible in program
PHP_INT_MAX;

// Integers can be in:
    // decimal 
    $x = .35;
    // base ten 
    $y = 5;
    // hexadecimal
    $p = 0x2A;
    // Octo Numbers
    $h = 055;
    // Binary Numbers
    $b = 0b11;
    // Integer Overflow
    $q = PHP_INT_MAX + 1;
    //will be conerted to float once it passes max value

// Casting values
// example
$a = (int) '5';

// checking if it is int
var_dump(is_int($a));



<?php 

/* FLOATS */
// examples
$x = 13.5e3;
$y = 13.5e-3;
$x = 13_000.5e3;

echo $x;

// to check the max php float
echo PHP_FLOAT_MAX;

// remove decimal using floor() and 
// ceil() rounds up 
$n = floor((0.1 + 0.7) * 10);

echo $n;

// NAN is not a number
// INF means infinite

// REMEMBER that floats might never be equal
// use built in functions to check what type it is 
// is_finite()
// is_nan()

// Casting
// (float)


<?php

/**
 * Note 
 * dynamically typed execute at run time while
 * statically typed execute at compile time
*/

/* Data Types & Type Casting */

# 4 Scalar Types
    # bool
    $completed = true;
    # int
    $score = 56;
    # float
    $price = 0.99;
    # string
    $greeting = "Hello Vic";

    echo $completed . '<br />';
    echo $score . '<br />';
    echo $price . '<br />';
    echo $greeting . '<br />';

// to get type use
echo gettype($score);
// returns details about the variable
var_dump($greeting);

# 4 Compound Types
    # array
    $companies = [1,2,3,'A', 'B', true];
    print_r($companies);
    # object
    # callable
    # iterable


# 2 Special Types
    # resource
    # null
    

// example of function
// note that PHP will try to transform params to the correct datatype
// to solve the previous error we can use 'strict mode' which will throw an error
declare(strict_types=1);
function sum(int $x, int $y){
    var_dump($x, $y);
    echo '<br />';
    return $x + $y;
}
$sum = sum('2',3);
echo $sum . '<br />';

// typecasting
// can transform types into other
$x = (int) '5';

var_dump($x);
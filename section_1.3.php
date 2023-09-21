<?php
// Constants

// Example of non constant
$firstName = 'Gio';
$firstName = 'Joe';

echo $firstName;

// two ways to define constants

// use define(nameOfConst, valueOfConst);
// these are defined at runtime
// name must be in capital letters
define('STATUS_PAID', 'paid');
echo STATUS_PAID;

//to check if a constant is defined returns boolean
echo defined('STATUS_PAID');

//second method to declaring constants
// these are defined at compile time
const STATUS_PAID_2 = 'paid2';
echo STATUS_PAID_2;

// when using define() use it for conditions
// example
if(true){
    define('EXAMPLE', 'value');
}

// creating constants dynamically
$paid = 'PAID_3';
define('STATUS_' . $paid, $paid);
echo STATUS_PAID_3;

// Predefined constants
// echo PHP_SOMETHING the something are PHP local const
// the same goes for echo __SOMETHING__

// variable variable
// takes the value and treats it as the name of the new variable
// example
$foo = 'bar';
$$foo = 'baz';
// so $bar should equal 'baz'
echo $bar;
// or echo $$foo;
// or echo "$foo, ${$foo}";


?>
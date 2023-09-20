<?php

// echo is what we would use to print
// single or double quote means that it is a string
// always have a colon and semicolon
echo 'Hello World';

// we can also use print
// it has a return value of one
print "hello world";

// when mixing echo and print it will concatenate a one
echo print 'Hello World';

// we can concatenate use spaces
echo 'Hello', ' ', 'World';

// if string as a sinle quote in it we must use double quotes
echo "Joe's Invoice";

// Using variables, we must declare using $ symbol
$name = 'Gio';
echo $name;

// Rules to creating variables
// either start with a letter or underscore
// special characters are invalid
// $this is a keyword and cannot be used as a variable

// Asigning variables by references vs by value
// When refencing we use "&"
$x = 1;
// we added the & to make it a reference
$y = &$x;
$x = 3;
echo $y;

//When printing variables we need to use double quotes
$firstName = 'Gio';
echo "Hello $firstName";
// or us the following
echo "Hello {$firstName}";
// or us the following
echo 'Hello ' .$firstName;
// incorrect method
echo 'Hello $firstName';

// double back dash comments
# using pound

/**
* Multi line comment or documentation lines
*/

?>
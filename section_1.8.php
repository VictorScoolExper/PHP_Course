<?php 

/* STRINGS */

// strings can be in single or double quotes
// cannot use variables in single quote
$firstName = 'Will';
// you can add variables to string 
$lastName = "Smilth";
// $completeName = "$firstName {$lastName}";echo $name[3];
$name = $firstName . ' ' .$lastName; 

echo $name . '<br />';

// extract letter in string 
// note if you use negative numbers it will start from the tail
echo $name[3];
// change values
$name[2] = "B";

echo $name;

/* Heredoc */
// lets use create text objects and can use variables
$x = "hello";
$z = "you can also concatenate these";

$text = <<<TEXT
Line 1
Line 2
Line 3
$x
$z
TEXT;
echo nl2br($text);

// heredoc html example
$hmtlText = <<<TEXT
<div>
    <p>Hello</p>
    <p>World</p>
</div>
TEXT;
echo nl2br($hmtlText);

/* Nowdoc */
// we cannot use variables but is similiar to heredoc
$text = <<<'TEXT'
Line 11
Line 22
Line 33
TEXT;
echo nl2br($text);

// Note that Heredoc and Nowdoc can be used when working with complex strings
// this can be better than having just a bunch of concatenation.
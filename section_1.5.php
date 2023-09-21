<?php 

/* Booleans */
// used mostly if boolean expressions
// integers 0-0 = false
// floats 0.0-0.0 = false
// '' = false
// '0' = false
// [] = false
// null = false

// example
$isComplete = [];
var_dump(is_bool($isComplete));

if($isComplete){
    // do something
    echo 'success';
} else {
    // do something else
    echo 'failed';
}

// note 
// when false it will return blank



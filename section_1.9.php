<?php

/* NULL */

/* null constant */
// null can be uppercase or lowercase
$x = null;
// it will return blank because it has no value, but it does seem to now return NULL
echo $x;
// use var_dump to verify that it is null
var_dump($x);
var_dump(is_null($x));
var_dump($x === null);

// using unset() destroys the variable
unset($x);


<?php

/* ARRAYS */
// defining arrays
// newer method
$programmingLanguages = ['PHP', 'Java', 'Python'];
// Older method
$programmingLanguages = array('PHP', 'Java', 'Python');

// Remember that strings are like arrays but in arrays we cannot access using negative numbers

// check if the value exists at specific keys
// var_dump(isset($programmingLanguages[0])); 

//$programmingLanguages[1] = 'C++';


// add to new object to array
// $programmingLanguages[] = 'C++';
// alternative method
array_push($programmingLanguages, 'C++', 'C', 'GO');

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

// get number of elements
echo count($programmingLanguages);

// Associative arrays
$programmingLanguages = [
    'php' => '8.0',
    'python' => '3.9'
];

echo $programmingLanguages['php'];

// adding values 
$newLanguage = 'go';
$programmingLanguages[$newLanguage] = '1.15';

echo '<pre>';
print_r($programmingLanguages);
echo '</pre>';

$programmingLanguagesArr = [
    'php' => [
        'creator' => 'Rasmus Lerdorf',
        'extension' => '.php',
        'website' => 'www.php.net',
        'isOpenSource' => true,
        'versions' =>[
            ['version' => '8.0', 'releaseDate' => 'Nov 26, 2020'],
            ['version' => '7.4', 'releaseDate' => 'Nov 28, 2019']
        ],
    ],
    'python' => [
        'creator' => 'Guido Van Rossum',
        'extension' => '.py',
        'website' => 'www.python.org',
        'isOpenSource' => true,
        'versions' =>[
            ['version' => '3.9', 'releaseDate' => 'Oct 5, 2020'],
            ['version' => '3.8', 'releaseDate' => 'Oct 14, 2019']
        ],
    ],
];

echo '<pre>';
print_r($programmingLanguagesArr);
echo '</pre>';

// access values
echo $programmingLanguagesArr['php']['website'];

// how to add keys keys to array
$array = ['a', 'b', 50 => 'c', 'd', 'e'];
echo array_pop($array);
// if you use array shift it will rearrange the indexes
echo array_shift($array);

// we can use unset() in array to eliminate that element
unset($array[0]);
// to remove multiple elements
// unset($array[0], $array[1]);

print_r($array);

/* Casting Arrays */
$x = null;
var_dump((array) $x);

// check if keys exist
$array = ['a' => 1, 'b' => null];
var_dump(array_key_exists('a', $array));
// or, isset is used more to check if it also has a value since it checks key and value
var_dump(isset($array['a']));
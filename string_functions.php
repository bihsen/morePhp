<?php
/*change the case of the string 
make it all capital letters
str = string
*/
$string = "Here , take a beer. ";
echo strtoupper($string).'<br>';

/*make all the string in lower case */
echo strtolower($string).'<br>';
/*first letter uppercase 
uc= upper case */
echo ucfirst($string).'<br>';

// First letter uppercase for each word
echo ucwords($string).'<br>';

// Find the position of a charachter in a string 
echo strpos($string, "b").'<br>';

//Retreive only one aprt of a string(sub-string)
$string = 'Here, take another beer.';
echo substr($string,10).'<br>';

//Replace a string into a string
echo str_replace('beer','coca cola', $string).'<br>';

//Delete a charchter at the beginig and the end of a string 
echo trim($string, '.').'<br>';
// Delete on the left side with ltrim($string)
// Delete on the right side with rtrim($string)

$string = 'Hello Ihsen I hope you are ok';
$array = explode(' ', $string);
var_dump($array).'<br>';

// Convert an array into a string using a delimiter
$string2 = implode(' ', $array);
echo $string2;
<?php 

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 1 </p>';

/*
-- Exercise 1 :
	
	1.1
	Write a PHP script which multiply two numbers
	Example : 2*4 = 8

	1.2
	Write a function which :
	    - Take 2 numbers in parameters
	    - Returns the result of the multiplication of the two numbers
	    
	1.3
	Create a form that:
	- Allows to enter 2 numbers
	- Get the result of the multiplication of these 2 numbers
		(use the function created in 1.2)
	- Warning, it is necessary to manage the case where the user does not enter the two numbers.
*/
$numberOne = 2;
$numberTwo = 4;
echo $numberOne * $numberTwo.'<br>' ;

echo'<hr>';

function myNumbers($x , $y ){
    return($x * $y);
}

 if (isset($_POST['myButton'])) {
    $multiplication1 = $_POST['myInput'];
    $multiplication2 = $_POST['secondInput'];    
    if(!empty($multiplication1)&& !empty($multiplication2)){        
        echo myNumbers($multiplication1 , $multiplication2);
    }
 }


echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 2 </p>';

/*
- Exercise 2

Write a function that:
    - Takes into parameter two numbers.
    - Check which is the largest number.

The expected result is this:
    The first number is larger (if the first number is larger than the second number)
    The first number is smaller (if the first number is smaller than the second number)
    The two numbers are identical (if the two numbers are equal)

*/


function numbers($x , $y ){
    
    if($x > $y){
        echo 'X is larger than Y';
    }
    else if($x < $y){
        echo 'X is smaller than Y';
    }
    else {
        echo 'X is equal than Y';
    }
}
numbers(4 , 8);


echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 3 </p>';

/*
-- Exercise 3

	3.1
	Write a PHP script that:
	    - Create an array of John's expenses.
	    - Calculates the sum of John's expenses over the year

	3.2
	Write a function that will:
	- Take an expense array as input
	- Calculate the sum of the expenses of the table
	- return this sum

*/
$sum = 0;
$jhonExpenses =[24, 58 , 10 , 70 , 90 , 111, 450 ];
for ($i=0; $i < count($jhonExpenses)  ; $i++) { 
    $sum += $jhonExpenses[$i];
}
echo $sum;

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 4 </p>';

/*
-- Exercice 4

Write a PHP script that checks if a string is a palindrome.
A palindrome is a chain of letters whose order of letters remains the same whether read from left to right or from right to left.

Example : 
"kayak"
"xanax"
"poop"

*/
$string = 'lanal';
function palindropme($string){
    for ($i=0; $i < strlen($string) ; $i++) { 
        if(!($string[$i] == $string[strlen($string)-1 -$i])){
            return 'it is not palindrome';
        }
    }
    return 'it is a palindrome';
}
echo palindropme($string);


echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 5 </p>';

/*
-- Exercice 5

Write a function that checks if a number is a prime number.
A prime number is an integer greater than 1 that can only be divided by itself and 1.


*/
$theNumber=1;
function prime($theNumber){
    for ($i=2 ; $i < $theNumber ; $i++) { 
        if(!($theNumber % $i == 0))
        return 'it is not a prime number';
    }
    return'it is a prime number';
} 

echo prime($theNumber);
echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 6 </p>';

/*

-- Exercice 6
Write a htmlImages($src) function that:
    - takes a string as argument ($src)
    - display an html <img> tag with $src source
Example :
    htmlImages('skate.jpg') 
    	> Displays <img src='skate.jpg'>

*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 7 </p>';

/*
-- Exercice 7

Ecrire une fonction qui :
    - Prend en paramètre deux nombres.
    - Qui retourne le résultat de la multiplication des deux nombres
    - Tous les paramètres doivent avoir une valeur par défaut.
    - Appeler votre fonction avec les nombres 10 et 2.
    - Appeler votre fonction avec un seul nombre : 4

Write a function that:
    - Takes two numbers as parameter.
    - That returns the result of the multiplication of the two numbers
    - All parameters must have a default value.
    - Call your function with the numbers 10 and 2.
    - Call your function with a single number: 4
*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 8 </p>';

/*
-- Exercice 8 :
	Write a PHP function that return the reverse(mirror) of an array.
*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 9</p>';

/*	
-- Exercise 9
Ecrire une fonction countWords($text) qui :
    - prend une chaine de caractère en argument ($text)
    - calcule le nombre de mots dans la chaine de caractère $text
    - retourne le résultat
Indice : il faut utiliser une fonction qui permet de découper une phrase en mots (déjà vu en cours)

Write a function 'countWords($text)' that:
    - takes a string of characters in argument ($text)
    - calculate the number of words in the $text string
    - return the result
Hint: use a function that allows you to split a sentence into words (already seen in class)

*/

echo '<hr>';
echo '<p style="font-weight: 900"> EXERCISE 10 </p>';

/*
-- Exercice 10 :
Repeat the previous exercise and write a countEachWords($test) function that:
    - takes a string of characters in argument ($text)
    - for each word present in $text, calculate how many times this word appears
    - return the result as an associative array

For example : "this is a random sentence, it is totally random".
Expected result :
    array( "this" -> 1, 
            "is" -> 2,
            "a" -> 1,
            "random" -> 2
            ....... );
            */

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" >
        <input type="text" name="myInput" >
        <input type="text" name="secondInput" >
        <input type="submit" name="myButton" value="submit">
    </form>
</body>
</html>
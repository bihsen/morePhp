<?php

/*

	1. Create an HTML form with a text field in a PHP script. The form will
	 point to the same page.

	2. Create a `submit` button that sends the string input, and displays
	 in a <div> this string in uppercase.

	3. Create a second `submit` button, which displays the string entered in lowercase

	4. Similarly, a submit to add a capital letter to each word
	
	5. And again a submit to add a capital letter, but only at the beginning of the chain.

	6. Now create a submit that will display the string only up to
	 the '.' (point) not included
	  - Use the `explode` function for that.
	  - Now use the `strpos` and` substr` function to produce the same result.

	Bonus: Finally, create a submit that displays the first two words of the string
	 entered, separated by a hyphen ("-")
  	If there are not enough words, display the message "Enter at least two words"
*/
//echo strtolower($string).'<br>';

if (isset($_POST['subButton'])) {
	$myinput = $_POST['textInput'];
	echo $myinput;
} else if (isset($_POST['divButton'])) {
	$divInput = $_POST['textInput'];
	echo '<div>' . strtoupper($divInput) . '<div/>';
} else if (isset($_POST['thirdButton'])) {
	$lowInput = $_POST['textInput'];
	echo strtolower($lowInput) ;
} else if (isset($_POST['fourthdButton'])) {
	$firstLetter = $_POST['textInput'];
	echo  ucwords($firstLetter);
} else if (isset($_POST['fifthdButton'])) {
	$firstword = $_POST['textInput'];
	echo  ucfirst($firstword);
} else if (isset($_POST['sixthdButton'])) {
	$myWords = $_POST['textInput'];
	echo strpos($myWords, ".") . '<br>';
	echo substr($myWords, 0, strpos($myWords, "."));
} else if (isset($_POST['seventhdButton'])) {
	$twoWords = $_POST['textInput'];
	$array = explode(' ', $twoWords);
	$array = array_slice($array, 0, 2);
	$array = implode('-', $array);
	echo $array;
	//$array = explode(' ', $twoWords);
	//if(count($array)>2)
	//	echo $array[0]. ' - '. $array[1];
}

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
	<form action="" method="POST">
		<input type="text" name="textInput" value="" id="">
		<input type="submit" name="subButton" value="submit">
		<input type="submit" name="divButton" value="upperCase">
		<input type="submit" name="thirdButton" value="lowerCase">
		<input type="submit" name="fourthdButton" value="firstLetter">
		<input type="submit" name="fifthdButton" value="firstWord">
		<input type="submit" name="sixthdButton" value="firstDot">
		<input type="submit" name="seventhdButton" value="twoWords">
	</form>

</body>

</html>
<?php
//Declare a function
function helloWorld()
{
    echo 'hello, world'.'<br>';
}
//call to the function
helloWorld();

//function with arguements 
function greetings($message ='hey bro'){
    echo 'you\'re message:'.$message .'<br>';
}


function multiply($x , $y = 2){
    echo ($x * $y);
}

function multiply2($x , $y = 2){
    return ($x * $y).'<br>';
}

function displayMessage($message, &$x){
    $x += 10;
    return $message .' : ' . $x; 

}
echo'<br>';
$number = 5;
echo '<br>'.'before -- My number outside the function:'. $number.'<br>';
echo displayMessage('my number inside the function' , $number).'<br>';
echo '<br>'. 'after --My number outside the function:'.$number . '<br>';




//call to the function
helloWorld();
echo'<br>';
greetings('hello!');
echo'<br>';
greetings();
echo multiply(5, 10 ).'<br>';
multiply(5,10);
 
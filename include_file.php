<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include 'example.php' ?>
</head>
<body>
    THIS IS THE BODY
    
    <?php echo $string ?>
</body>
<?php
//include a file  
include 'footer.html'; 
include_once 'footer.html';
// require -> stop the execution if there is an error
require 'example.php';
require_once 'example.php'?>
</html>
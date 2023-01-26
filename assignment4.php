<?php
//get the school name of the customer from the database and store in the variable
$schoolName = "DMACC";
define("SCHOOLNAME", $schoolName);
$firstName = "Jeff"; //scope is global
$lastName = "Gullion"; //scope is global
$schoolName = "ISU"; //scope is global
$phoneNumber = "1234567890"; 
$usCurrency = "$123456";
date("YY-m-d");
date("U");
//define a function in PHP

function displayName(){
    //PHHP will Always look for a local version of a variable. It will NOT automatically look for global
    //tell the function to use the Global version of a variable
    global $firstName, $lastName, $phoneNumber;  //tells the functinon to use the global version of the variable
    echo $firstName;
    echo $lastName;
    echo SCHOOLNAME;
    echo $phoneNumber;
   }

function displayInputs($inFirstName){
    echo strtolower($inFirstName);
    echo (" ");
    echo strlen($inFirstName);
    }


?>

<!DOCTYPE html>
<html lang="en>
<head>
    <meta charset ="UTF-8"> 
    <meta http- equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=divice-width, intial-scale=1.0">
    <title>Assignment-4</title>
</head>
<body>
    <h1>WDV341 Jeff's Intro PHP Assignment</h1>
    <hr>
    <h2>Unit-4 PHP Functions and examples</h2>
    <p>Your School: <?php echo SCHOOLNAME; ?></p>
    <p>Thank you to: <?php echo $firstName, " ", $lastName; ?></p>


    <p> First Name: <?php displayInputs($firstName); ?></p>
     <p>Last Name: <?php displayInputs($lastName); ?></p>
    <p>Today is <?php echo date("l n/d/y"); ?></p>
    <p>Your Phone Number:<?php echo $phoneNumber; ?></p>
    <p>You have:<?php echo $usCurrency; ?></p>
    <p>Unix Time:<?php echo date("U"); ?></p>
    
   
</body>
</html>
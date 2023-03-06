<?php 

//database work flow
//1. connect to the database, we are using our dbConnect.php
//2. create sql command
//3. prepare your Statement
//4. bind any parameters as needed
//5. execute your SQL commands/prepare statement
//6. process your result-set object

require 'dbconnect.php';    
// in PHP we cannot use . for object dot notation. use ->

//1.//connect to the data base
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//2. create SQL command
$sql = "SELECT name, description, presenter FROM webdev341_events";

//3. prepare your statements/statement object
$stmt = $conn->prepare($sql);  //prepare the SQL statement into the statement object

//4. bind paraments
//$recordID = 2;
//$stmt->bindParam(':recordID',$recordId);
//$stmt->bindParam(':recordId',$recordId); //1:29 lesson recording 7
//$presenter = "Karen Murphy ";
//$stmt->bindParam(':presenterName',$presenter);

//5. execute statements
$stmt->execute();     //the $stmt will CATCH the returned result-set object

//6. process the result set/object
$stmt->setFetchMode(PDO::FETCH_ASSOC);  //set the result as an associate array

/*
$row = $stmt->fetch();
echo $row['name'];
echo $row['description'];
*/

/*
while($row = $stmt->fetch()){
    echo "<br>";
    echo $row['name'];
    echo $row['description'];
    echo $row['presenter'];
}   
*/

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>

            .courseCard {
                background-color:tan;
                width:500px;
            }
        </style>

    </head>
    <body>
        <h1>WDV341 Intro to PHP</h1>
        <h2>SELECT Example</h2>
        <div>

            <div class='courseCard'>
                <h2>WDV221 Intro Javascript</h2>
                <p>This course discusses the Javascript programming language</p>
                <p>Instructor: Matt Hall</p>
            </div>
    <?php
              
        while($row=$stmt->fetch()){
            //echo $row["name"]; 
        
    ?>
        <div class='courseCard'>
                <h2><?php echo $row['name']; ?></h2>
                <p><?php echo $row['description']; ?></p>
                <p>Instructor: <?php echo $row['presenter']; ?></p>
            </div>
    <?php 
        }
    ?>

        </div>
    </body>
</html>
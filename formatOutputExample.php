<?php

    //database work flow
    //  1. Connect to the database
    //  2. Create your SQL command
    //  3. Prepare your Statement       PDO Prepared Statements
    //  4. Bind any parameters as needed
    //  5. Execute your SQL command/prepared statement
    //  6. Process your result-set/object

    //1.  Connect to the database, we are using our dbConnect.php
    require 'dbConnect.php';        //connect to the database
        //creates a connection object called $conn
        //PHP CANNOT use the . for object dot notation, we use the -> symbol instead

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //2. Create SQL command
    $sql = "SELECT name, description, presenter FROM webdev341_events";    //SQL syntax and format

    //3. Prepare your statement/statement object
    $stmt = $conn->prepare($sql);       //prepare the SQL statement into the statement object

    //4. Bind any parameters, if any
    //None for this version
   

    //5. Execute your prepared statement
    $stmt->execute();               //the $stmt will CATCH the returned result-set/object

    //6. Process the result set/object
    $stmt->setFetchMode(PDO::FETCH_ASSOC);     //set result as an associative array
    //Associative Array is with strings instead of numeric indexes
    //$eventsArray = $stmt->fetchAll();   //assume this will return an associative array

    /*
    $row = $stmt->fetch();
    echo $row['name'];
    echo $row['description'];
    $row = $stmt->fetch();
    echo $row['name'];
    echo $row['description'];    
    $row = $stmt->fetch();
    echo $row['name'];
    echo $row['description'];
    */

    /*
    while($row = $stmt->fetch() ){
        //one output for each row in the result from the SELECT statement
        echo "<br>";
        echo $row["name"];
        echo $row['description'];
    */
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
    <h1>WDV341 Intro PHP</h1>
    <h2>SELECT Example</h2>
    <div>

        <div class='courseCard'>
            <h2>WDV221 Intro JavaScript</h2>
            <p>This course discusses the JavaScript programming language.</p>
            <p>Instructor: Matt Hall</p>
        </div>

<?php
    while($row = $stmt->fetch() ){
        //echo $row["name"];
        //below code prevents echoing each courseCard
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
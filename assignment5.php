<!DOCTYPE html>
<html>

<head>
    <meta charset ="UTF-8"> 
    <meta http- equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=divice-width, intial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style5.css">
</head>
<body>
    
  
    <h1>WDV Lesson 5</h1>
    <form action="test.php" method="get">
       First Name:  <input type="text" name="firstName">
       <br>
       Last Name: <input type="text" name="lastName">
       <br>
       
       <?php echo $_GET["firstName"]?>
       <?php echo $_GET["lastName"]?>
       <form action="/html/tags/html_form_tag_action.cfm" method="post">
    <div>
    <textarea name="comments" id="comments" style="font-family:sans-serif;font-size:1.2em;">
      Comments are optional
    </textarea>
    </div>
    <input type="submit" value="Submit">
    </form>


    <br>
    
    

    <form>
    <input type="radio" id="html" name="fav_language" value="High School">
    <label for="High School">High School</label><br>
    <input type="radio" id="html" name="fav_language" value="Freshman">
    <label for="Freshman">Freshman</label><br>
    <input type="radio" id="html" name="fav_language" value="Sophmore">
    <label for="Sophmore">Sophmore</label><br>
    </form>



    <br>

    <form>
        <input type="checkbox" id="Contact me" name="Contact me" value="Contact">
        <label for="vehicle1"> Please contact me with program information</label><br>
        <input type="checkbox" id="Advisor" name="program advisor" value="program advisor">
        <label for="vehicle1"> I would like to contact an program advisor</label><br>
    </form>
   
     <br>

    
       
    <div class="menu-bar"> 
    <ul>
        <li class="active"><a href="#"><i class="fa fa-user"></i>DCGW</a>
        <div class="sub-menu-1">
            <ul>
                <li><a href="#">Default Options</a></li>
                <li><a href="#">Computer Info Systems</a></li>
                <li><a href="#">Graphic-Design</a></li>
                <li><a href="#">Web Development</a></li>
            </ul>
        </div>
           
       
    


</body>
</html>
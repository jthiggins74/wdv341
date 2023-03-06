<?php
    /* This program will test the Event Class
    */

    include("Event.php");  //access the class file

    $eventObject = new Event();  //instatiation command using the event class
                                // create new object based on teh Event Class
    $eventObject->set_eventName(("WDV341"));

    echo "Event Name: " .$eventObject->get_evenName();
    
    $eventObject->eventDescription= " Introduction to PHP programming for web applications";
    echo  "Event Description: " .$eventObject->eventDescription;
    
    //JSON Output
    $JSONEventObject = json_encode($eventObject);
    echo $JSONEventObject;

    ?>
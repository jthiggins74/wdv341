<?php 

class Event {
    /*

    this class will be used to build an event object from the wdv341 database of events. 
    This provides a standard way of building the Event Object
    */

    // propoerties - one property for each piece of data the object will contain

    public $eventName;
    public $eventDescription;
    public$eventPresenter;

    //constructor Method automatically called when you create a new object for the class
    function _construct(){
        $eventName = "event name";
        $eventDescription = "event description";
        $eventPresenter = "event presenter";

    }

    //methods - setters/mutators; getters/accessors processing funtions.

    function set_eventName($inName){
        $this->eventName = $inName;    //sets a new value into the $eventname property
    }

    function get_evenName(){
        return $this->eventName;

    }











}
?>
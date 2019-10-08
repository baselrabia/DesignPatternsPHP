<?php

namespace Observer;

include_once 'Subject.php';
include_once 'Observer.php';

class Person implements Observer {

    public function __construct($name)
    {
        $this->name = $name;    
    }
    public function update(Subject $coffeeMaker){
        echo $this->name . " subscribed to " .$coffeeMaker->coffee. " arrival!";
    }
}
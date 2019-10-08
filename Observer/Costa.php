<?php

namespace Observer;

include_once 'Person.php';
include_once 'Subject.php';
include_once 'Observer.php';

class Costa implements Subject{
    private $subscribers = array();

    public function __construct($coffee)
    {
      $this->coffee = $coffee;
    }

    public function attach(Observer $subscriber){
        $this->subscribers[] = $subscriber;
    }
    public function detach(Observer $subscriber){
        foreach($this->subscribers as $key => $val) {
            if ($val == $subscriber) { 
              unset($this->subscribers[$key]);
            }
          }
    }
    public function notify(){
        foreach($this->subscribers as $subscriber) {
            $subscriber->update($this);
            echo "<br>";
          }
    }
}
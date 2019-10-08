<?php

namespace Decorator;

include_once 'Coffee.php';

class Macchiato implements Coffee{
    
    public function getTitle(){
        return 'Macchiato';
    }
    
}
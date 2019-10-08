<?php

namespace Decorator;

include_once 'Coffee.php';

class Espresso implements Coffee{
    
    public function getTitle(){
        return 'Espresso';
    }

}
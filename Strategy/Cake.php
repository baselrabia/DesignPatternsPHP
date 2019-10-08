<?php

namespace Strategy;

include_once 'Menu.php';

class Cake implements Menu{
    public function order()
    {
        echo "Your Order is Cake"; 
    }
}
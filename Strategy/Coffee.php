<?php

namespace Strategy;

include_once 'Menu.php';

class Coffee implements Menu{
    public function order()
    {
        echo "Your Order is Coffee"; 
    }
}
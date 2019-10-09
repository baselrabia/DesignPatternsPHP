<?php

include_once 'CoffeeShop.php';
include_once 'Coffee.php';

class Costa extends CoffeeShop {
    public function prepare() : Coffee {
        return new Coffee();
    }
}
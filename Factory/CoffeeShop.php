<?php

include_once 'Coffee.php';

abstract class CoffeeShop {
    abstract public function prepare() : Coffee;
}
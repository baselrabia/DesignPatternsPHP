<?php

namespace Decorator;

include_once 'Coffee.php';

class Flavours implements Coffee{

    protected $coffee;

    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    public function getTitle()
    {
        return $this->coffee->getTitle();
    }
}
<?php

namespace Decorator;

include_once 'Flavours.php';

class CaramelFlavour extends Flavours{

    public function getTitle()
    {
        return 'Caramel Flavour('. parent::getTitle() . ')';
    }
}
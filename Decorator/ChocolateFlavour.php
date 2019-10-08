<?php

namespace Decorator;

include_once 'Flavours.php';

class ChocolateFlavour extends Flavours{

    public function getTitle()
    {
        return 'Chocolate Flavour('. parent::getTitle() . ')';
    }
}
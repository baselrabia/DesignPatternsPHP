<?php

namespace Singleton;

include_once 'Singleton.php';

class Database extends Singleton {

    protected $label;

    /**
     * Example of that singleton is working correctly.
     */
    public function setLabel($label)
    {
    $this->label = $label;
    }

    public function getLabel()
    {
    return $this->label;
    }
}
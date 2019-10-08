<?php

namespace Decorator;

include_once 'Espresso.php';
include_once 'CaramelFlavour.php';
include_once 'ChocolateFlavour.php';

$espresso = new Espresso;
$decorator = new CaramelFlavour($espresso);
$decorator = new ChocolateFlavour($decorator);
echo $decorator->getTitle();

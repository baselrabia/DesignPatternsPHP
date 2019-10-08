<?php

namespace Strategy;

include_once 'Coffee.php';
include_once 'Cake.php';

$menu = new Cake();
echo $menu->order();

echo "<br>";

$menu = new Coffee();
echo $menu->order();


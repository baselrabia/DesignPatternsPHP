<?php

include_once 'Costa.php';
include_once 'Starbucks.php';

$costa = new Costa();
echo ($costa->prepare())->getName('Coffee From Costa');

echo "<br>";

$starbucks = new Starbucks();
echo ($starbucks->prepare())->getName('Coffee From Starbucks');
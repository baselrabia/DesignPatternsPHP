<?php

namespace Observer;

include_once 'Costa.php';
include_once 'Person.php';

$costa = new Costa('Latte');
$person = new Person('Mohamed');
$person2 = new Person('Ahmed');
$person3 = new Person('Test');

$costa->attach($person);
$costa->attach($person2);
$costa->attach($person3);
$costa->detach($person3);

$costa->notify();


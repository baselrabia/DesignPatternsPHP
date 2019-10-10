<?php

namespace Singleton;

include_once 'Database.php';
include_once 'Singleton.php';


// create first instance
$database = Database::instance();
// $database->setLabel('Abraham');
// echo $database->getLabel() . PHP_EOL;

// // // now try to create other instance as well
$other_db = Database::instance();
echo $other_db->getLabel() . PHP_EOL; // Abraham

$other_db->setLabel('Priler');
echo $database->getLabel() . PHP_EOL; // Priler
echo $other_db->getLabel() . PHP_EOL; // Priler

<?php
require_once 'vendor/autoload.php';

use Transport\Auto;
use Transport\Plane;

$kalina = new Auto();
$kalina->setName('VAZ');
$kalina->setModel('1117');
$kalina->setNumberWheel(4);
$kalina->setMaxSpeed(150);
$kalina->printShortInfo();

$harley = new Auto();
$harley->setName('Harley Davidson');
$harley->setModel('Street 750');
$harley->setNumberWheel(2);
$harley->setMaxSpeed(180);
$harley->printShortInfo();

$boeing = new Plane();
$boeing->setName('Boeing');
$boeing->setModel('747');
$boeing->setCrew(3);
$boeing->setMaxSpeed(955);
$boeing->printShortInfo();

$array = [$kalina, $harley, $boeing];
echo '<br>Output Transports from array:<br>';
foreach ($array as $item) {
    $item->printAllinfo();
    echo '<br>';
}
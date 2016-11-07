<?php 

use Hetic\Human;
require_once 'vendor/autoload.php';

$human1 = new Human(1);

$human1->setWeight(80);

echo $human1->getWeight().PHP_EOL;

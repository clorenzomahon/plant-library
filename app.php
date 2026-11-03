<?php
require_once 'Plant.php';

$basil = new Plant('Basil', 'full sun', [4, 5 ,6]);

echo $basil->describe() ."\n";
var_dump($basil->canSowInMonth(5));
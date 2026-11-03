<?php
require_once 'Plant.php';

$basil = new Plant('Basil', 'full sun', [4, 5 ,6]);

echo $basil->describe() ."\n";
var_dump($basil->canSowInMonth(5));

require_once 'Herb.php';

$mint = new Herb('Mint', 'partial shade', [3, 4, 5], 'tea');
echo $mint->describe() . "\n";
echo (new Plant('Test', 'full sun', [11], 'low'))->describe(). "\n";
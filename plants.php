<?php

$plants = [
 ['name' => 'Basil', 'sun' => 'full sun', 'months' => [4, 5, 6]] ,
 ['name' => 'Mint', 'sun' => 'partial shade', 'months' => [3, 4, 5]],
 ['name' => 'Sweet pea', 'sun' => 'full sun', 'months' => [3, 4]],
];


foreach ($plants as $plant){
  echo $plant['name'] . ' - ' . $plant['sun'] . "\n";
} 
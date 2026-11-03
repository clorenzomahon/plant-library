<?php

$plants = [
 ['name' => 'Basil', 'sun' => 'full sun', 'months' => [4, 5, 6]] ,
 ['name' => 'Mint', 'sun' => 'partial shade', 'months' => [3, 4, 5]],
 ['name' => 'Sweet pea', 'sun' => 'full sun', 'months' => [3, 4]],
];

function canSowInMonth (array $plant, int $month): bool{
  return in_array($month, $plant['months']);
}

$month = (int) date('n');
foreach ($plants as $plant) {
  if (canSowInMonth($plant, $month)) {
    echo $plant['name'] . " can be sown this month.\n";
  }
}
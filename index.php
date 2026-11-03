<?php
require_once 'Plant.php';
require_once 'Herb.php';
require_once 'Vegetable.php';

$library = [
  new Herb('Basil', 'full sun', [4, 5, 11], 'cooking', 'high'),
  new Herb('Mint', 'partial shade', [3, 4, 5], 'tea', 'high'),
  new Plant('Sweet pea', 'full sun', [3, 4], 'medium'),
  new Herb('Parsley', 'partial shade', [3, 4, 5, 6, 7], 'garnish'),
  new Herb('Coriander', 'full sun', [4, 5, 6, 7], 'curries'),
  new Herb('Chives', 'full sun', [3, 4, 5, 6], 'salads'),
  new Herb('Thyme', 'full sun', [4, 5], 'roasts', 'low'),
  new Vegetable('Carrot', 'full sun', [3, 4, 5, 6, 7], 75),
  new Vegetable('Lettuce', 'partial shade', [3, 4, 5, 6, 7, 8], 50, 'high'),
  new Vegetable('Radish', 'full sun', [3, 4, 5, 6, 7, 8, 9], 30),
  new Vegetable('Pea', 'full sun', [3, 4, 5, 6], 90),
  new Plant('Sunflower', 'full sun', [4, 5], 'high'),
  new Plant('Nasturtium', 'full sun', [4, 5, 6]),
];
usort($library, fn (Plant $a, Plant $b) => strcmp($a->name, $b->name));

$month = (int) ($_GET['month'] ?? date('n'));
if ($month < 1 || $month > 12) {
  $month = (int) date('n');
}
$sowable = array_filter(
  $library,
  fn (Sowable $plant) => $plant->canSowInMonth($month)
);
?>
<!DOCTYPE html>
<html lang="en-GB">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>What to sow this month</title>
</head>
<body>
  <h1>What to sow this month</h1>
  <?php if (empty($sowable)): ?>
    <p>Nothing to sow this month.</p>
  <?php else: ?>
    <ul>
      <?php foreach ($sowable as $plant): ?>
        <li><?= htmlspecialchars($plant->describe()) ?></li>
      <?php endforeach; ?>
    </ul>
    <?php endif; ?>
</body>
</html>
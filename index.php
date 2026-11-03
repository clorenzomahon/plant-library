<?php
require_once 'Plant.php';
require_once 'Herb.php';

$library = [
  new Herb('Basil', 'full sun', [4, 5, 11], 'cooking', 'high'),
  new Herb('Mint', 'partial shade', [3, 4, 5], 'tea', 'high'),
  new Plant('Sweet pea', 'full sun', [3, 4], 'medium'),
];

$month = (int) date('n');

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
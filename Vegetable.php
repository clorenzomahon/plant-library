<?php

require_once 'Plant.php';

class Vegetable extends Plant
{
  public function __construct(
    string $name,
    string $sun,
    array $sowingMonths,
    public int $daysToHarvest,
    string $water = 'medium',
  ) {
    parent::__construct($name, $sun, $sowingMonths, $water);
  }

  public function describe(): string
  {
    return parent::describe() . ", ready in {$this->daysToHarvest} days";
  }
}
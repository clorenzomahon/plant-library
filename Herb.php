<?php

require_once 'Plant.php';
class Herb extends Plant
{
  public function __construct(
    string $name,
    string $sun,
    array $sowingMonths,
    public string $use,
    public string $water = 'medium',
  ){
    parent ::__construct($name, $sun, $sowingMonths);
  }

  public function describe(): string
  {
    return parent::describe() . ", used for {$this->use}";
  }
}
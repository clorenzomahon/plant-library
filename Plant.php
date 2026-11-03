<?php

class Plant
{
    public function __construct(
        public string $name,
        public string $sun,
        public array $sowingMonths,
    ) {
    }

    public function canSowInMonth(int $month): bool
    {
        return in_array($month, $this->sowingMonths, true);
    }

    public function describe(): string
    {
        return "{$this->name} (needs {$this->sun})";
    }
}
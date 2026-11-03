<?php

interface Sowable
{
    public function canSowInMonth(int $month): bool;
}

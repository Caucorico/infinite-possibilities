<?php


namespace App\Service;


class ProductionUtils
{
    public function initializeProductionArray(): array
    {
        return array(
            'iron' => 0,
            'petrol' => 0,
            'uranium' => 0,
            'gold' => 0,
            'sand' => 0,
            'steel' => 0,
            'coal' => 0
        );
    }
}
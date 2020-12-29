<?php


namespace App\Service;


class FlowUtils
{
    public function initializeFlowArray(): array
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
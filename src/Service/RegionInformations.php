<?php


namespace App\Service;

use App\Entity\Region;

class RegionInformations
{
    /**
     * @var FlowUtils
     */
    private FlowUtils $flowUtils;

    /**
     * @var ProductionUtils
     */
    private ProductionUtils $productionUtils;

    public function __construct(FlowUtils $flowUtils, ProductionUtils $productionUtils)
    {
        $this->flowUtils = $flowUtils;
        $this->productionUtils = $productionUtils;
    }

    public function getAllProductions(Region $region): array {
        $production = $this->productionUtils->initializeProductionArray();

        foreach ( $region->getBuildings() as $building ) {
            $buildingType = $building->getBuildingType();
            $production['iron'] += $buildingType->getIronProduction();
            $production['petrol'] += $buildingType->getPetrolProduction();
            $production['uranium'] += $buildingType->getUraniumProduction();
            $production['gold'] += $buildingType->getGoldProduction();
            $production['sand'] += $buildingType->getSandProduction();
            $production['steel'] += $buildingType->getSteelProduction();
            $production['coal'] += $buildingType->getCoalProduction();
        }

        return $production;
    }

    public function getMaximumFlow(Region $region): array {
        $maximumFlow = $this->flowUtils->initializeFlowArray();

        foreach ( $region->getInfrastructures() as $infrastructure ) {
            $infraFlow = $infrastructure->getInfrastructureType()->getFlow();
            $maximumFlow['iron'] += $infraFlow['iron'];
            $maximumFlow['petrol'] += $infraFlow['petrol'];
            $maximumFlow['uranium'] += $infraFlow['uranium'];
            $maximumFlow['gold'] += $infraFlow['gold'];
            $maximumFlow['sand'] += $infraFlow['sand'];
            $maximumFlow['steel'] += $infraFlow['steel'];
            $maximumFlow['coal'] += $infraFlow['coal'];
            $maximumFlow['max'] += $infraFlow['max'];
        }

        return $maximumFlow;
    }

    public function getCurrentFlow(Region $region): array {
        $currentFlow = $this->flowUtils->initializeFlowArray();

        foreach ( $region->getStartMerchandiseWays() as $merchandiseWay ) {
            $infraFlow = $merchandiseWay->getCurrentFlow();
            $currentFlow['iron'] += $infraFlow['iron'];
            $currentFlow['petrol'] += $infraFlow['petrol'];
            $currentFlow['uranium'] += $infraFlow['uranium'];
            $currentFlow['gold'] += $infraFlow['gold'];
            $currentFlow['sand'] += $infraFlow['sand'];
            $currentFlow['steel'] += $infraFlow['steel'];
            $currentFlow['coal'] += $infraFlow['coal'];
        }

        return $currentFlow;
    }

}
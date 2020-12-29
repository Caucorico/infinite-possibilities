<?php


namespace App\Service;


use App\Entity\Game;
use App\Entity\Player;
use App\Repository\GameRepository;
use App\Repository\PlayerRepository;
use App\Repository\RegionRepository;
use App\Repository\UserRepository;

class PlayerInformations
{

    /**
     * @var PlayerRepository
     */
    private PlayerRepository $playerRepository;

    /**
     * @var GameRepository
     */
    private GameRepository $gameRepository;

    /**
     * @var UserRepository
     */
    private UserRepository $userRepository;

    /**
     * @var RegionRepository
     */
    private RegionRepository $regionRepository;

    /**
     * @var ProductionUtils
     */
    private ProductionUtils $productionUtils;

    public function __construct(PlayerRepository $playerRepository, GameRepository $gameRepository,
                                UserRepository $userRepository, RegionRepository $regionRepository,
                                ProductionUtils $productionUtils) {
        $this->playerRepository = $playerRepository;
        $this->gameRepository = $gameRepository;
        $this->userRepository = $userRepository;
        $this->regionRepository = $regionRepository;
        $this->productionUtils = $productionUtils;
    }

    public function getAllProductions(Player $player): array {
        $game = $player->getGame();
        $production = array(
            'iron' => 0,
            'petrol' => 0,
            'uranium' => 0,
            'gold' => 0,
            'sand' => 0,
            'steel' => 0,
            'coal' => 0
        );

        /* TODO : transform this request into SQL for optimisation */

        for ( $i = 0 ; $i < $game->getSize() ; $i++ ) {
            for ( $j = 0 ; $j < $game->getSize() ; $j++ ) {
                $region = $this->regionRepository->findByGameAndCoord($game, $i, $j);

                if ( $region->getPlayer() !== $player ) continue;

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

            }
        }

        return $production;
    }
}
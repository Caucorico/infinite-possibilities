<?php


namespace App\Service;


use App\Entity\Game;
use App\Entity\Region;
use DateTime;
use Psr\Log\LoggerInterface;

class GameGenerator
{
    /**
     * @var LoggerInterface
     */
    private $logger;

    const OCEAN_NUMBER = 2;
    const OCEAN_SIZE = 20;
    const FOREST_NUMBER = 6;
    const FOREST_SIZE = 8;
    const JUNGLE_NUMBER = 2;
    const JUNGLE_SIZE = 5;
    const DESERT_NUMBER = 2;
    const DESERT_SIZE = 10;
    const MONTAIN_NUMBER = 2;
    const MONTAIN_SIZE = 6;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    private function clamp($current, $min, $max) {
        return max($min, min($max, $current));
    }

    private function initializeMap(int $size): array {
        $regions = array();

        for ( $i = 0 ; $i < $size ; $i++ ) {
            $regions[$i] = array();
            for ( $j = 0 ; $j < $size ; $j++ ) {
                $regions[$i][$j] = new Region();
                $regions[$i][$j]->setX($i);
                $regions[$i][$j]->setY($j);
                $regions[$i][$j]->setBiome(Region::PLAIN_BIOME);
            }
        }

        return $regions;
    }

    private function makeOcean(int $size, array $regions) {
        for ($i = 0 ; $i < self::OCEAN_NUMBER ; $i++ ) {
            $currentX = rand(0, $size-1);
            $currentY = rand(0, $size-1);

            $regions[$currentX][$currentY]->setBiome(Region::OCEAN_BIOME);

            for ( $j = 0 ; $j < self::OCEAN_SIZE ; $j++ ) {
                for ( $k = 0 ; $k < self::OCEAN_SIZE ; $k++ ) {
                    $randX = rand(-1,1);
                    $randY = rand(-1,1);
                    $currentX = $this->clamp(($currentX += $randX), 0, $size-1);
                    $currentY = $this->clamp(($currentY += $randY), 0, $size-1);

                    $regions[$currentX][$currentY]->setBiome(Region::OCEAN_BIOME);
                }

            }
        }
    }

    private function makeForest(int $size, array $regions) {
        for ($i = 0 ; $i < self::FOREST_NUMBER ; $i++ ) {
            $currentX = rand(0, $size-1);
            $currentY = rand(0, $size-1);

            $regions[$currentX][$currentY]->setBiome(Region::FOREST_BIOME);

            for ( $j = 0 ; $j < self::FOREST_SIZE ; $j++ ) {
                for ( $k = 0 ; $k < self::FOREST_SIZE ; $k++ ) {
                    $randX = rand(-1,1);
                    $randY = rand(-1,1);
                    $currentX = $this->clamp(($currentX += $randX), 0, $size-1);
                    $currentY = $this->clamp(($currentY += $randY), 0, $size-1);

                    if ( $regions[$currentX][$currentY]->getBiome() !==  Region::OCEAN_BIOME ) {
                        $regions[$currentX][$currentY]->setBiome(Region::FOREST_BIOME);
                    }
                }

            }
        }
    }

    private function makeJungle(int $size, array $regions) {
        for ($i = 0 ; $i < self::JUNGLE_NUMBER ; $i++ ) {
            $currentX = rand(0, $size-1);
            $currentY = rand(0, $size-1);

            $regions[$currentX][$currentY]->setBiome(Region::JUNGLE_BIOME);

            for ( $j = 0 ; $j < self::JUNGLE_SIZE ; $j++ ) {
                for ( $k = 0 ; $k < self::JUNGLE_SIZE ; $k++ ) {
                    $randX = rand(-1,1);
                    $randY = rand(-1,1);
                    $currentX = $this->clamp(($currentX += $randX), 0, $size-1);
                    $currentY = $this->clamp(($currentY += $randY), 0, $size-1);

                    if ( $regions[$currentX][$currentY]->getBiome() !==  Region::OCEAN_BIOME ) {
                        $regions[$currentX][$currentY]->setBiome(Region::JUNGLE_BIOME);
                    }
                }

            }
        }
    }

    private function makeDesert(int $size, array $regions) {
        for ($i = 0 ; $i < self::DESERT_NUMBER ; $i++ ) {
            $currentX = rand(0, $size-1);
            $currentY = rand(0, $size-1);

            $regions[$currentX][$currentY]->setBiome(Region::DESERT_BIOME);

            for ( $j = 0 ; $j < self::DESERT_SIZE ; $j++ ) {
                for ( $k = 0 ; $k < self::DESERT_SIZE ; $k++ ) {
                    $randX = rand(-1,1);
                    $randY = rand(-1,1);
                    $currentX = $this->clamp(($currentX += $randX), 0, $size-1);
                    $currentY = $this->clamp(($currentY += $randY), 0, $size-1);

                    if ( $regions[$currentX][$currentY]->getBiome() !==  Region::OCEAN_BIOME ) {
                        $regions[$currentX][$currentY]->setBiome(Region::DESERT_BIOME);
                    }
                }

            }
        }
    }

    private function makeMontain(int $size, array $regions) {
        for ($i = 0 ; $i < self::MONTAIN_NUMBER ; $i++ ) {
            $currentX = rand(0, $size-1);
            $currentY = rand(0, $size-1);

            $regions[$currentX][$currentY]->setBiome(Region::MONTAIN_BIOME);

            for ( $j = 0 ; $j < self::MONTAIN_SIZE ; $j++ ) {
                for ( $k = 0 ; $k < self::MONTAIN_SIZE ; $k++ ) {
                    $randX = rand(-1,1);
                    $randY = rand(-1,1);
                    $currentX = $this->clamp(($currentX += $randX), 0, $size-1);
                    $currentY = $this->clamp(($currentY += $randY), 0, $size-1);

                    if ( $regions[$currentX][$currentY]->getBiome() !==  Region::OCEAN_BIOME ) {
                        $regions[$currentX][$currentY]->setBiome(Region::MONTAIN_BIOME);
                    }
                }

            }
        }
    }

    private function attributeRegionToMap(Game $map, array $regions) {
        for ( $i = 0 ; $i < $map->getSize() ; $i++ ) {
            for ($j = 0; $j < $map->getSize(); $j++) {
                $map->addRegion($regions[$i][$j]);
            }
        }
    }

    public function generateMap(Game $game): Game {
        $regions = $this->initializeMap($game->getSize());

        $game->setStartDate(new DateTime());
        $this->makeOcean($game->getSize(), $regions);
        $this->makeForest($game->getSize(), $regions);
        $this->makeJungle($game->getSize(), $regions);
        $this->makeDesert($game->getSize(), $regions);
        $this->makeMontain($game->getSize(), $regions);
        $this->attributeRegionToMap($game, $regions);

        return $game;
    }
}
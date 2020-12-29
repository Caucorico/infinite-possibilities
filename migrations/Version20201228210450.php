<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201228210450 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('INSERT INTO `building_type` (`id`, `name`, `iron_production`, `petrol_production`, `uranium_production`, `money_production`, `gold_production`, `sand_production`, `steel_production`, `coal_production`, `iron_consumption`, `petrol_consumption`, `uranium_consumption`, `gold_consumption`, `sand_consumption`, `steel_consumption`, `coal_consumption`, `money_consumption`, `money_cost`, `iron_cost`, `petrol_cost`, `uranium_cost`, `gold_cost`, `sand_cost`, `steel_cost`, `coal_cost`, `iron_capacity`, `petrol_capacity`, `uranium_capacity`, `gold_capacity`, `sand_capacity`, `steel_capacity`, `coal_capacity`, `total_capacity`) VALUES (NULL, "BUILDING.IRON_MINE", "15", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "10000", "25000", "5", "1", "0", "0", "0", "8", "0", "100", "0", "0", "100", "100", "100", "100", "100")');
        $this->addSql('INSERT INTO `building_type` (`id`, `name`, `iron_production`, `petrol_production`, `uranium_production`, `money_production`, `gold_production`, `sand_production`, `steel_production`, `coal_production`, `iron_consumption`, `petrol_consumption`, `uranium_consumption`, `gold_consumption`, `sand_consumption`, `steel_consumption`, `coal_consumption`, `money_consumption`, `money_cost`, `iron_cost`, `petrol_cost`, `uranium_cost`, `gold_cost`, `sand_cost`, `steel_cost`, `coal_cost`, `iron_capacity`, `petrol_capacity`, `uranium_capacity`, `gold_capacity`, `sand_capacity`, `steel_capacity`, `coal_capacity`, `total_capacity`) VALUES (NULL, "BUILDING.PETROL_MINE", "0", "10", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "1", "0", "0", "10000", "25000", "1", "0", "0", "0", "10", "8", "0", "0", "100", "0", "0", "0", "0", "0", "100")');
        $this->addSql('INSERT INTO `building_type` (`id`, `name`, `iron_production`, `petrol_production`, `uranium_production`, `money_production`, `gold_production`, `sand_production`, `steel_production`, `coal_production`, `iron_consumption`, `petrol_consumption`, `uranium_consumption`, `gold_consumption`, `sand_consumption`, `steel_consumption`, `coal_consumption`, `money_consumption`, `money_cost`, `iron_cost`, `petrol_cost`, `uranium_cost`, `gold_cost`, `sand_cost`, `steel_cost`, `coal_cost`, `iron_capacity`, `petrol_capacity`, `uranium_capacity`, `gold_capacity`, `sand_capacity`, `steel_capacity`, `coal_capacity`, `total_capacity`) VALUES (NULL, "BUILDING.URANIUM_MINE", "0", "0", "3", "0", "0", "0", "0", "0", "1", "0", "0", "0", "0", "1", "0", "20000", "50000", "5", "2", "0", "0", "0", "8", "0", "25", "0", "25", "25", "25", "25", "25", "25")');
        $this->addSql('INSERT INTO `building_type` (`id`, `name`, `iron_production`, `petrol_production`, `uranium_production`, `money_production`, `gold_production`, `sand_production`, `steel_production`, `coal_production`, `iron_consumption`, `petrol_consumption`, `uranium_consumption`, `gold_consumption`, `sand_consumption`, `steel_consumption`, `coal_consumption`, `money_consumption`, `money_cost`, `iron_cost`, `petrol_cost`, `uranium_cost`, `gold_cost`, `sand_cost`, `steel_cost`, `coal_cost`, `iron_capacity`, `petrol_capacity`, `uranium_capacity`, `gold_capacity`, `sand_capacity`, `steel_capacity`, `coal_capacity`, `total_capacity`) VALUES (NULL, "BUILDING.GOLD_MINE", "0", "0", "0", "0", "5", "0", "0", "0", "1", "0", "0", "0", "0", "1", "0", "10000", "25000", "5", "0", "0", "0", "0", "5", "0", "20", "0", "0", "20", "20", "20", "20", "20")');
        $this->addSql('INSERT INTO `building_type` (`id`, `name`, `iron_production`, `petrol_production`, `uranium_production`, `money_production`, `gold_production`, `sand_production`, `steel_production`, `coal_production`, `iron_consumption`, `petrol_consumption`, `uranium_consumption`, `gold_consumption`, `sand_consumption`, `steel_consumption`, `coal_consumption`, `money_consumption`, `money_cost`, `iron_cost`, `petrol_cost`, `uranium_cost`, `gold_cost`, `sand_cost`, `steel_cost`, `coal_cost`, `iron_capacity`, `petrol_capacity`, `uranium_capacity`, `gold_capacity`, `sand_capacity`, `steel_capacity`, `coal_capacity`, `total_capacity`) VALUES (NULL, "BUILDING.SAND_MINE", "0", "0", "0", "0", "0", "12", "0", "0", "1", "0", "0", "0", "0", "2", "0", "10000", "25000", "2", "0", "0", "0", "0", "8", "0", "100", "0", "0", "100", "100", "100", "100", "100")');
        $this->addSql('INSERT INTO `building_type` (`id`, `name`, `iron_production`, `petrol_production`, `uranium_production`, `money_production`, `gold_production`, `sand_production`, `steel_production`, `coal_production`, `iron_consumption`, `petrol_consumption`, `uranium_consumption`, `gold_consumption`, `sand_consumption`, `steel_consumption`, `coal_consumption`, `money_consumption`, `money_cost`, `iron_cost`, `petrol_cost`, `uranium_cost`, `gold_cost`, `sand_cost`, `steel_cost`, `coal_cost`, `iron_capacity`, `petrol_capacity`, `uranium_capacity`, `gold_capacity`, `sand_capacity`, `steel_capacity`, `coal_capacity`, `total_capacity`) VALUES (NULL, "BUILDING.STEEL_USINE", "0", "0", "0", "0", "0", "0", "8", "0", "6", "0", "0", "0", "0", "0", "2", "10000","25000", "8", "0", "0", "0", "0", "2", "0", "100", "0", "0", "100", "100", "100", "100", "100")');
        $this->addSql('INSERT INTO `building_type` (`id`, `name`, `iron_production`, `petrol_production`, `uranium_production`, `money_production`, `gold_production`, `sand_production`, `steel_production`, `coal_production`, `iron_consumption`, `petrol_consumption`, `uranium_consumption`, `gold_consumption`, `sand_consumption`, `steel_consumption`, `coal_consumption`, `money_consumption`, `money_cost`, `iron_cost`, `petrol_cost`, `uranium_cost`, `gold_cost`, `sand_cost`, `steel_cost`, `coal_cost`, `iron_capacity`, `petrol_capacity`, `uranium_capacity`, `gold_capacity`, `sand_capacity`, `steel_capacity`, `coal_capacity`, `total_capacity`) VALUES (NULL, "BUILDING.NORMAL_STOCKAGE", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "2000", "10000", "2", "0", "0", "0", "0", "2", "0", "1000", "0", "0", "1000", "1000", "1000", "1000", "1000")');
        $this->addSql('INSERT INTO `building_type` (`id`, `name`, `iron_production`, `petrol_production`, `uranium_production`, `money_production`, `gold_production`, `sand_production`, `steel_production`, `coal_production`, `iron_consumption`, `petrol_consumption`, `uranium_consumption`, `gold_consumption`, `sand_consumption`, `steel_consumption`, `coal_consumption`, `money_consumption`, `money_cost`, `iron_cost`, `petrol_cost`, `uranium_cost`, `gold_cost`, `sand_cost`, `steel_cost`, `coal_cost`, `iron_capacity`, `petrol_capacity`, `uranium_capacity`, `gold_capacity`, `sand_capacity`, `steel_capacity`, `coal_capacity`, `total_capacity`) VALUES (NULL, "BUILDING.PETROL_STOCKAGE", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "10000", "25000", "2", "0", "0", "0", "0", "5", "0", "0", "1000", "0", "0", "0", "0", "0", "1000")');
        $this->addSql('INSERT INTO `building_type` (`id`, `name`, `iron_production`, `petrol_production`, `uranium_production`, `money_production`, `gold_production`, `sand_production`, `steel_production`, `coal_production`, `iron_consumption`, `petrol_consumption`, `uranium_consumption`, `gold_consumption`, `sand_consumption`, `steel_consumption`, `coal_consumption`, `money_consumption`, `money_cost`, `iron_cost`, `petrol_cost`, `uranium_cost`, `gold_cost`, `sand_cost`, `steel_cost`, `coal_cost`, `iron_capacity`, `petrol_capacity`, `uranium_capacity`, `gold_capacity`, `sand_capacity`, `steel_capacity`, `coal_capacity`, `total_capacity`) VALUES (NULL, "BUILDING.URANIUM_STOCKAGE", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "1", "0", "20000", "50000", "5", "0", "0", "0", "0", "10", "0", "0", "0", "500", "0", "0", "0", "0", "500")');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DELETE FROM `building_type` WHERE `name` = "BUILDING.IRON_MINE"');
        $this->addSql('DELETE FROM `building_type` WHERE `name` = "BUILDING.PETROL_MINE"');
        $this->addSql('DELETE FROM `building_type` WHERE `name` = "BUILDING.URANIUM_MINE"');
        $this->addSql('DELETE FROM `building_type` WHERE `name` = "BUILDING.GOLD_MINE"');
        $this->addSql('DELETE FROM `building_type` WHERE `name` = "BUILDING.SAND_MINE"');
        $this->addSql('DELETE FROM `building_type` WHERE `name` = "BUILDING.STEEL_USINE"');
        $this->addSql('DELETE FROM `building_type` WHERE `name` = "BUILDING.NORMAL_STOCKAGE"');
        $this->addSql('DELETE FROM `building_type` WHERE `name` = "BUILDING.PETROL_STOCKAGE"');
        $this->addSql('DELETE FROM `building_type` WHERE `name` = "BUILDING.URANIUM_STOCKAGE"');
    }
}

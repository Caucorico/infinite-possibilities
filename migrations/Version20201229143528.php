<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201229143528 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        $this->addSql('INSERT INTO `infrastructure_type` (`id`, `flow`, `consumption`, `cost`, `name`) VALUES (NULL, "{ \"iron\": 4, \"petrol\": 4, \"uranium\": 0, \"gold\": 4, \"sand\": 4, \"steel\": 4, \"coal\": 4, \"max\": 4 }", "{ \"iron\": 1, \"petrol\": 0, \"uranium\": 0, \"gold\": 0, \"sand\": 0, \"steel\": 0, \"coal\": 0 }", "{ \"iron\": 1, \"petrol\": 0, \"uranium\": 0, \"gold\": 0, \"sand\": 0, \"steel\": 1, \"coal\": 0 }", "INFRASTRUCTURE.PATH")');
        $this->addSql('INSERT INTO `infrastructure_type` (`id`, `flow`, `consumption`, `cost`, `name`) VALUES (NULL, "{ \"iron\": 8, \"petrol\": 8, \"uranium\": 8, \"gold\": 8, \"sand\": 8, \"steel\": 8, \"coal\": 8, \"max\": 8 }", "{ \"iron\": 2, \"petrol\": 0, \"uranium\": 0, \"gold\": 0, \"sand\": 0, \"steel\": 1, \"coal\": 0 }", "{ \"iron\": 2, \"petrol\": 0, \"uranium\": 0, \"gold\": 0, \"sand\": 0, \"steel\": 2, \"coal\": 0 }", "INFRASTRUCTURE.ROAD")');
        $this->addSql('INSERT INTO `infrastructure_type` (`id`, `flow`, `consumption`, `cost`, `name`) VALUES (NULL, "{ \"iron\": 16, \"petrol\": 16, \"uranium\": 16, \"gold\": 16, \"sand\": 16, \"steel\": 16, \"coal\": 16, \"max\": 16 }", "{ \"iron\": 4, \"petrol\": 0, \"uranium\": 0, \"gold\": 0, \"sand\": 0, \"steel\": 2, \"coal\": 0 }", "{ \"iron\": 4, \"petrol\": 0, \"uranium\": 0, \"gold\": 0, \"sand\": 0, \"steel\": 4, \"coal\": 0 }", "INFRASTRUCTURE.HIGHWAY")');
        $this->addSql('INSERT INTO `infrastructure_type` (`id`, `flow`, `consumption`, `cost`, `name`) VALUES (NULL, "{ \"iron\": 32, \"petrol\": 32, \"uranium\": 32, \"gold\": 32, \"sand\": 32, \"steel\": 32, \"coal\": 32, \"max\": 32 }", "{ \"iron\": 8, \"petrol\": 0, \"uranium\": 0, \"gold\": 0, \"sand\": 0, \"steel\": 4, \"coal\": 1 }", "{ \"iron\": 8, \"petrol\": 0, \"uranium\": 0, \"gold\": 0, \"sand\": 0, \"steel\": 8, \"coal\": 0 }", "INFRASTRUCTURE.RAILWAY")');
        $this->addSql('INSERT INTO `infrastructure_type` (`id`, `flow`, `consumption`, `cost`, `name`) VALUES (NULL, "{ \"iron\": 64, \"petrol\": 64, \"uranium\": 64, \"gold\": 64, \"sand\": 64, \"steel\": 64, \"coal\": 64, \"max\": 64 }", "{ \"iron\": 16, \"petrol\": 0, \"uranium\": 0, \"gold\": 0, \"sand\": 0, \"steel\": 8, \"coal\": 0 }", "{ \"iron\": 16, \"petrol\": 0, \"uranium\": 0, \"gold\": 0, \"sand\": 0, \"steel\": 16, \"coal\": 0 }", "INFRASTRUCTURE.ELECTRICAL_RAILWAY")');

    }

    public function down(Schema $schema) : void
    {
        $this->addSql('DELETE FROM `infrastructure_type` WHERE `name` = "INFRASTRUCTURE.PATH"');
        $this->addSql('DELETE FROM `infrastructure_type` WHERE `name` = "INFRASTRUCTURE.ROAD"');
        $this->addSql('DELETE FROM `infrastructure_type` WHERE `name` = "INFRASTRUCTURE.HIGHWAY"');
        $this->addSql('DELETE FROM `infrastructure_type` WHERE `name` = "INFRASTRUCTURE.RAILWAY"');
        $this->addSql('DELETE FROM `infrastructure_type` WHERE `name` = "INFRASTRUCTURE.ELECTRICAL_RAILWAY"');
    }
}

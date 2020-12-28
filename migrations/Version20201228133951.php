<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201228133951 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE building (id INT AUTO_INCREMENT NOT NULL, building_type_id INT NOT NULL, region_id INT NOT NULL, life SMALLINT NOT NULL, INDEX IDX_E16F61D4F28401B9 (building_type_id), INDEX IDX_E16F61D498260155 (region_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE building_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, iron_production INT NOT NULL, petrol_production INT NOT NULL, uranium_production INT NOT NULL, money_production INT NOT NULL, gold_production INT NOT NULL, sand_production INT NOT NULL, steel_production INT NOT NULL, coal_production INT NOT NULL, iron_consumption INT NOT NULL, petrol_consumption INT NOT NULL, uranium_consumption INT NOT NULL, gold_consumption INT NOT NULL, sand_consumption INT NOT NULL, steel_consumption INT NOT NULL, coal_consumption INT NOT NULL, money_consumption INT NOT NULL, money_cost INT NOT NULL, iron_cost INT NOT NULL, petrol_cost INT NOT NULL, uranium_cost INT NOT NULL, gold_cost INT NOT NULL, sand_cost INT NOT NULL, steel_cost INT NOT NULL, coal_cost INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE building ADD CONSTRAINT FK_E16F61D4F28401B9 FOREIGN KEY (building_type_id) REFERENCES building_type (id)');
        $this->addSql('ALTER TABLE building ADD CONSTRAINT FK_E16F61D498260155 FOREIGN KEY (region_id) REFERENCES region (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE building DROP FOREIGN KEY FK_E16F61D4F28401B9');
        $this->addSql('DROP TABLE building');
        $this->addSql('DROP TABLE building_type');
    }
}

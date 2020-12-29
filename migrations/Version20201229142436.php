<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201229142436 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE infrastructure (id INT AUTO_INCREMENT NOT NULL, region_id INT NOT NULL, infrastructure_type_id INT NOT NULL, INDEX IDX_D129B19098260155 (region_id), INDEX IDX_D129B1908CB09F1C (infrastructure_type_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE infrastructure_type (id INT AUTO_INCREMENT NOT NULL, flow JSON NOT NULL, consumption JSON NOT NULL, cost JSON NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE infrastructure ADD CONSTRAINT FK_D129B19098260155 FOREIGN KEY (region_id) REFERENCES region (id)');
        $this->addSql('ALTER TABLE infrastructure ADD CONSTRAINT FK_D129B1908CB09F1C FOREIGN KEY (infrastructure_type_id) REFERENCES infrastructure_type (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE infrastructure DROP FOREIGN KEY FK_D129B1908CB09F1C');
        $this->addSql('DROP TABLE infrastructure');
        $this->addSql('DROP TABLE infrastructure_type');
    }
}

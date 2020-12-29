<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201229165338 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE merchandise_way (id INT AUTO_INCREMENT NOT NULL, start_id INT NOT NULL, end_id INT NOT NULL, current_flow JSON NOT NULL, path JSON NOT NULL, INDEX IDX_A56E3204623DF99B (start_id), INDEX IDX_A56E3204E2BD8A10 (end_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE merchandise_way ADD CONSTRAINT FK_A56E3204623DF99B FOREIGN KEY (start_id) REFERENCES region (id)');
        $this->addSql('ALTER TABLE merchandise_way ADD CONSTRAINT FK_A56E3204E2BD8A10 FOREIGN KEY (end_id) REFERENCES region (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE merchandise_way');
    }
}

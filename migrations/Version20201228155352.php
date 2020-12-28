<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201228155352 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE player (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, game_id INT NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_98197A65A76ED395 (user_id), INDEX IDX_98197A65E48FD905 (game_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE player ADD CONSTRAINT FK_98197A65A76ED395 FOREIGN KEY (user_id) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE player ADD CONSTRAINT FK_98197A65E48FD905 FOREIGN KEY (game_id) REFERENCES game (id)');
        $this->addSql('ALTER TABLE building ADD iron_stock INT NOT NULL, ADD petrol_stock INT NOT NULL, ADD uranium_stock INT NOT NULL, ADD gold_stock INT NOT NULL, ADD sand_stock INT NOT NULL, ADD steel_stock INT NOT NULL, ADD coal_stock INT NOT NULL');
        $this->addSql('ALTER TABLE building_type ADD iron_capacity INT NOT NULL, ADD petrol_capacity INT NOT NULL, ADD uranium_capacity INT NOT NULL, ADD gold_capacity INT NOT NULL, ADD sand_capacity INT NOT NULL, ADD steel_capacity INT NOT NULL, ADD coal_capacity INT NOT NULL, ADD total_capacity INT NOT NULL');
        $this->addSql('ALTER TABLE region ADD player_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE region ADD CONSTRAINT FK_F62F17699E6F5DF FOREIGN KEY (player_id) REFERENCES player (id)');
        $this->addSql('CREATE INDEX IDX_F62F17699E6F5DF ON region (player_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE region DROP FOREIGN KEY FK_F62F17699E6F5DF');
        $this->addSql('DROP TABLE player');
        $this->addSql('ALTER TABLE building DROP iron_stock, DROP petrol_stock, DROP uranium_stock, DROP gold_stock, DROP sand_stock, DROP steel_stock, DROP coal_stock');
        $this->addSql('ALTER TABLE building_type DROP iron_capacity, DROP petrol_capacity, DROP uranium_capacity, DROP gold_capacity, DROP sand_capacity, DROP steel_capacity, DROP coal_capacity, DROP total_capacity');
        $this->addSql('DROP INDEX IDX_F62F17699E6F5DF ON region');
        $this->addSql('ALTER TABLE region DROP player_id');
    }
}

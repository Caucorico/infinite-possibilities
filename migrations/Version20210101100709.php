<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210101100709 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE game_ressource_type (game_id INT NOT NULL, ressource_type_id INT NOT NULL, INDEX IDX_A6AB0BECE48FD905 (game_id), INDEX IDX_A6AB0BEC70760271 (ressource_type_id), PRIMARY KEY(game_id, ressource_type_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ressource_type (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE game_ressource_type ADD CONSTRAINT FK_A6AB0BECE48FD905 FOREIGN KEY (game_id) REFERENCES game (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE game_ressource_type ADD CONSTRAINT FK_A6AB0BEC70760271 FOREIGN KEY (ressource_type_id) REFERENCES ressource_type (id) ON DELETE CASCADE');

        $this->addSql('INSERT INTO `ressource_type` (`id`, `name`) VALUES (NULL, "RESSOURCE_TYPE.IRON")');
        $this->addSql('INSERT INTO `ressource_type` (`id`, `name`) VALUES (NULL, "RESSOURCE_TYPE.PETROL")');
        $this->addSql('INSERT INTO `ressource_type` (`id`, `name`) VALUES (NULL, "RESSOURCE_TYPE.URANIUM")');
        $this->addSql('INSERT INTO `ressource_type` (`id`, `name`) VALUES (NULL, "RESSOURCE_TYPE.GOLD")');
        $this->addSql('INSERT INTO `ressource_type` (`id`, `name`) VALUES (NULL, "RESSOURCE_TYPE.SAND")');
        $this->addSql('INSERT INTO `ressource_type` (`id`, `name`) VALUES (NULL, "RESSOURCE_TYPE.STEEL")');
        $this->addSql('INSERT INTO `ressource_type` (`id`, `name`) VALUES (NULL, "RESSOURCE_TYPE.COAL")');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE game_ressource_type DROP FOREIGN KEY FK_A6AB0BEC70760271');
        $this->addSql('DROP TABLE game_ressource_type');
        $this->addSql('DROP TABLE ressource_type');
    }
}

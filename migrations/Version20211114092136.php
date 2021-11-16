<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211114092136 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE voyage_de_noce (id INT AUTO_INCREMENT NOT NULL, admin_id INT DEFAULT NULL, nom VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, image VARCHAR(255) NOT NULL, emplacement LONGTEXT NOT NULL, INDEX IDX_1D1C49D1642B8210 (admin_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE voyage_de_noce ADD CONSTRAINT FK_1D1C49D1642B8210 FOREIGN KEY (admin_id) REFERENCES admin (id)');
        $this->addSql('ALTER TABLE commentaire ADD voyage_de_noce_id INT NOT NULL');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BCDFB03229 FOREIGN KEY (voyage_de_noce_id) REFERENCES voyage_de_noce (id)');
        $this->addSql('CREATE INDEX IDX_67F068BCDFB03229 ON commentaire (voyage_de_noce_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BCDFB03229');
        $this->addSql('DROP TABLE voyage_de_noce');
        $this->addSql('DROP INDEX IDX_67F068BCDFB03229 ON commentaire');
        $this->addSql('ALTER TABLE commentaire DROP voyage_de_noce_id');
    }
}

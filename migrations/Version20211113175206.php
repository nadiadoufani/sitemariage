<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211113175206 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire ADD musique_de_mariage_id INT NOT NULL');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC9B0ADBB7 FOREIGN KEY (musique_de_mariage_id) REFERENCES musique_de_mariage (id)');
        $this->addSql('CREATE INDEX IDX_67F068BC9B0ADBB7 ON commentaire (musique_de_mariage_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC9B0ADBB7');
        $this->addSql('DROP INDEX IDX_67F068BC9B0ADBB7 ON commentaire');
        $this->addSql('ALTER TABLE commentaire DROP musique_de_mariage_id');
    }
}

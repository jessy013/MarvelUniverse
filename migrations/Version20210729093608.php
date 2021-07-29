<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210729093608 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE hero_organisations (hero_id INT NOT NULL, organisations_id INT NOT NULL, INDEX IDX_F7B562D245B0BCD (hero_id), INDEX IDX_F7B562D27A3DA19F (organisations_id), PRIMARY KEY(hero_id, organisations_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE hero_organisations ADD CONSTRAINT FK_F7B562D245B0BCD FOREIGN KEY (hero_id) REFERENCES hero (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE hero_organisations ADD CONSTRAINT FK_F7B562D27A3DA19F FOREIGN KEY (organisations_id) REFERENCES organisations (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE hero_organisations');
    }
}

<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150920152207 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE answer DROP created, DROP updated');
        $this->addSql('ALTER TABLE question DROP created, DROP updated');
        $this->addSql('ALTER TABLE topic DROP created, DROP updated');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE answer ADD created DATETIME NOT NULL, ADD updated DATETIME NOT NULL');
        $this->addSql('ALTER TABLE question ADD created DATETIME NOT NULL, ADD updated DATETIME NOT NULL');
        $this->addSql('ALTER TABLE topic ADD created DATETIME NOT NULL, ADD updated DATETIME NOT NULL');
    }
}

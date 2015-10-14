<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150920163427 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE map_drugs_targets (target_id INT NOT NULL, drug_id INT NOT NULL, INDEX IDX_852C2D7C158E0B66 (target_id), INDEX IDX_852C2D7CAABCA765 (drug_id), PRIMARY KEY(target_id, drug_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE map_drugs_targets ADD CONSTRAINT FK_852C2D7C158E0B66 FOREIGN KEY (target_id) REFERENCES target (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE map_drugs_targets ADD CONSTRAINT FK_852C2D7CAABCA765 FOREIGN KEY (drug_id) REFERENCES drug (id) ON DELETE CASCADE');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE map_drugs_targets');
    }
}

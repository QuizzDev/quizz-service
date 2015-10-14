<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150920164039 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE map_drugs_advereeffects (advere_effect_id INT NOT NULL, drug_id INT NOT NULL, INDEX IDX_C99B848ACB23C (advere_effect_id), INDEX IDX_C99B848AABCA765 (drug_id), PRIMARY KEY(advere_effect_id, drug_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE map_drugs_contraindications (contra_indication_id INT NOT NULL, drug_id INT NOT NULL, INDEX IDX_56538130EBF0017 (contra_indication_id), INDEX IDX_56538130AABCA765 (drug_id), PRIMARY KEY(contra_indication_id, drug_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE map_drugs_advereeffects ADD CONSTRAINT FK_C99B848ACB23C FOREIGN KEY (advere_effect_id) REFERENCES advere_effect (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE map_drugs_advereeffects ADD CONSTRAINT FK_C99B848AABCA765 FOREIGN KEY (drug_id) REFERENCES drug (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE map_drugs_contraindications ADD CONSTRAINT FK_56538130EBF0017 FOREIGN KEY (contra_indication_id) REFERENCES contra_indication (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE map_drugs_contraindications ADD CONSTRAINT FK_56538130AABCA765 FOREIGN KEY (drug_id) REFERENCES drug (id) ON DELETE CASCADE');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE map_drugs_advereeffects');
        $this->addSql('DROP TABLE map_drugs_contraindications');
    }
}

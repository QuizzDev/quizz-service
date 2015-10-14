<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150920105615 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE advere_effects DROP drugs, CHANGE wikipedialink wikipedia_link VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE contra_indication DROP drugs, CHANGE wikipedialink wikipedia_link VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE drug ADD drug_agent_text VARCHAR(255) NOT NULL, ADD wikipedia_link VARCHAR(255) NOT NULL, DROP drugAgentText, DROP wikipediaLink');
        $this->addSql('ALTER TABLE indication DROP associatedDrugs, CHANGE wikipedialink wikipedia_link VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE target DROP drugs, CHANGE wikipedialink wikipedia_link VARCHAR(255) NOT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE advere_effects ADD drugs LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', CHANGE wikipedia_link wikipediaLink VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE contra_indication ADD drugs LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', CHANGE wikipedia_link wikipediaLink VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE drug ADD drugAgentText VARCHAR(255) NOT NULL, ADD wikipediaLink VARCHAR(255) NOT NULL, DROP drug_agent_text, DROP wikipedia_link');
        $this->addSql('ALTER TABLE indication ADD associatedDrugs LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', CHANGE wikipedia_link wikipediaLink VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE target ADD drugs LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', CHANGE wikipedia_link wikipediaLink VARCHAR(255) NOT NULL');
    }
}

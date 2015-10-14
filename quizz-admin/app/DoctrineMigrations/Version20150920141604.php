<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20150920141604 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE advere_effect (id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE advere_effect ADD CONSTRAINT FK_427DA929BF396750 FOREIGN KEY (id) REFERENCES answer (id) ON DELETE CASCADE');
        $this->addSql('DROP TABLE advere_effects');
        $this->addSql('ALTER TABLE answer ADD name VARCHAR(255) NOT NULL, ADD wikipedia_link VARCHAR(255) NOT NULL, ADD discriminator VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE contra_indication DROP name, DROP description, DROP wikipedia_link, DROP created, DROP updated, CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE contra_indication ADD CONSTRAINT FK_B276BBA9BF396750 FOREIGN KEY (id) REFERENCES answer (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE drug ADD description VARCHAR(255) NOT NULL, DROP name, DROP created, DROP updated, DROP drug_agent_text, DROP wikipedia_link, CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE drug ADD CONSTRAINT FK_43EB7A3EBF396750 FOREIGN KEY (id) REFERENCES answer (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE indication DROP name, DROP description, DROP wikipedia_link, DROP created, DROP updated, CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE indication ADD CONSTRAINT FK_D15065D7BF396750 FOREIGN KEY (id) REFERENCES answer (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE target DROP name, DROP wikipedia_link, DROP created, DROP updated, CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE target ADD CONSTRAINT FK_466F2FFCBF396750 FOREIGN KEY (id) REFERENCES answer (id) ON DELETE CASCADE');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE advere_effects (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, wikipedia_link VARCHAR(255) NOT NULL, created DATETIME NOT NULL, updated DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('DROP TABLE advere_effect');
        $this->addSql('ALTER TABLE answer DROP name, DROP wikipedia_link, DROP discriminator');
        $this->addSql('ALTER TABLE contra_indication DROP FOREIGN KEY FK_B276BBA9BF396750');
        $this->addSql('ALTER TABLE contra_indication ADD name VARCHAR(255) NOT NULL, ADD description VARCHAR(255) NOT NULL, ADD wikipedia_link VARCHAR(255) NOT NULL, ADD created DATETIME NOT NULL, ADD updated DATETIME NOT NULL, CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE drug DROP FOREIGN KEY FK_43EB7A3EBF396750');
        $this->addSql('ALTER TABLE drug ADD created DATETIME NOT NULL, ADD updated DATETIME NOT NULL, ADD drug_agent_text VARCHAR(255) NOT NULL, ADD wikipedia_link VARCHAR(255) NOT NULL, CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE description name VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE indication DROP FOREIGN KEY FK_D15065D7BF396750');
        $this->addSql('ALTER TABLE indication ADD name VARCHAR(255) NOT NULL, ADD description VARCHAR(255) NOT NULL, ADD wikipedia_link VARCHAR(255) NOT NULL, ADD created DATETIME NOT NULL, ADD updated DATETIME NOT NULL, CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE target DROP FOREIGN KEY FK_466F2FFCBF396750');
        $this->addSql('ALTER TABLE target ADD name VARCHAR(255) NOT NULL, ADD wikipedia_link VARCHAR(255) NOT NULL, ADD created DATETIME NOT NULL, ADD updated DATETIME NOT NULL, CHANGE id id INT AUTO_INCREMENT NOT NULL');
    }
}

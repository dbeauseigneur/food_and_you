<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20170107112934 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE baptism_has_user (id INT AUTO_INCREMENT NOT NULL, baptism_id INT DEFAULT NULL, user_id INT DEFAULT NULL, role TINYINT(1) NOT NULL, INDEX IDX_D799699E832BB05 (baptism_id), INDEX IDX_D799699EA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE baptism_has_user ADD CONSTRAINT FK_D799699E832BB05 FOREIGN KEY (baptism_id) REFERENCES baptism (id)');
        $this->addSql('ALTER TABLE baptism_has_user ADD CONSTRAINT FK_D799699EA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE baptism_has_user');
    }
}

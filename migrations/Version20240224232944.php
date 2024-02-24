<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240224232944 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE account_statement (id INT AUTO_INCREMENT NOT NULL, account_id VARCHAR(34) NOT NULL, date DATE NOT NULL, balance DOUBLE PRECISION NOT NULL, INDEX IDX_E2A1892D9B6B5FBA (account_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE account_statement ADD CONSTRAINT FK_E2A1892D9B6B5FBA FOREIGN KEY (account_id) REFERENCES account (account_no)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE account_statement DROP FOREIGN KEY FK_E2A1892D9B6B5FBA');
        $this->addSql('DROP TABLE account_statement');
    }
}

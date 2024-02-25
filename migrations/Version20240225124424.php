<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240225124424 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE account_transaction DROP FOREIGN KEY FK_A370F9D2EDCC8CAE');
        $this->addSql('ALTER TABLE account_transaction DROP FOREIGN KEY FK_A370F9D23D82E92A');
        $this->addSql('ALTER TABLE account_statement DROP FOREIGN KEY FK_E2A1892D9B6B5FBA');
        $this->addSql('ALTER TABLE account_statement CHANGE account_id account_id INT NOT NULL');
        $this->addSql('ALTER TABLE account_transaction CHANGE debtor debtor INT NOT NULL, CHANGE creditor creditor INT NOT NULL');
        $this->addSql('ALTER TABLE account DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE account ADD id INT NOT NULL');
        $this->addSql('ALTER TABLE account ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE account CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE account_statement ADD CONSTRAINT FK_E2A1892D9B6B5FBA FOREIGN KEY (account_id) REFERENCES account (id)');
        $this->addSql('ALTER TABLE account_transaction ADD CONSTRAINT FK_A370F9D2EDCC8CAE FOREIGN KEY (debtor) REFERENCES account (id)');
        $this->addSql('ALTER TABLE account_transaction ADD CONSTRAINT FK_A370F9D23D82E92A FOREIGN KEY (creditor) REFERENCES account (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE account MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `PRIMARY` ON account');
        $this->addSql('ALTER TABLE account DROP id');
        $this->addSql('ALTER TABLE account ADD PRIMARY KEY (account_no)');
        $this->addSql('ALTER TABLE account_transaction DROP FOREIGN KEY FK_A370F9D2EDCC8CAE');
        $this->addSql('ALTER TABLE account_transaction DROP FOREIGN KEY FK_A370F9D23D82E92A');
        $this->addSql('ALTER TABLE account_transaction CHANGE debtor debtor VARCHAR(34) NOT NULL, CHANGE creditor creditor VARCHAR(34) NOT NULL');
        $this->addSql('ALTER TABLE account_transaction ADD CONSTRAINT FK_A370F9D2EDCC8CAE FOREIGN KEY (debtor) REFERENCES account (account_no)');
        $this->addSql('ALTER TABLE account_transaction ADD CONSTRAINT FK_A370F9D23D82E92A FOREIGN KEY (creditor) REFERENCES account (account_no)');
        $this->addSql('ALTER TABLE account_statement DROP FOREIGN KEY FK_E2A1892D9B6B5FBA');
        $this->addSql('ALTER TABLE account_statement CHANGE account_id account_id VARCHAR(34) NOT NULL');
        $this->addSql('ALTER TABLE account_statement ADD CONSTRAINT FK_E2A1892D9B6B5FBA FOREIGN KEY (account_id) REFERENCES account (account_no)');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240224231445 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE account_transaction (id INT AUTO_INCREMENT NOT NULL, currency VARCHAR(3) NOT NULL, debtor VARCHAR(34) NOT NULL, creditor VARCHAR(34) NOT NULL, datetime DATETIME NOT NULL, amount DOUBLE PRECISION NOT NULL, INDEX IDX_A370F9D26956883F (currency), INDEX IDX_A370F9D2EDCC8CAE (debtor), INDEX IDX_A370F9D23D82E92A (creditor), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE account_transaction ADD CONSTRAINT FK_A370F9D26956883F FOREIGN KEY (currency) REFERENCES currency (currency)');
        $this->addSql('ALTER TABLE account_transaction ADD CONSTRAINT FK_A370F9D2EDCC8CAE FOREIGN KEY (debtor) REFERENCES account (account_no)');
        $this->addSql('ALTER TABLE account_transaction ADD CONSTRAINT FK_A370F9D23D82E92A FOREIGN KEY (creditor) REFERENCES account (account_no)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE account_transaction DROP FOREIGN KEY FK_A370F9D26956883F');
        $this->addSql('ALTER TABLE account_transaction DROP FOREIGN KEY FK_A370F9D2EDCC8CAE');
        $this->addSql('ALTER TABLE account_transaction DROP FOREIGN KEY FK_A370F9D23D82E92A');
        $this->addSql('DROP TABLE account_transaction');
    }
}

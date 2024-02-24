<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240224205921 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE account MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX `primary` ON account');
        $this->addSql('ALTER TABLE account ADD account_no VARCHAR(34) NOT NULL, DROP id');
        $this->addSql('ALTER TABLE account ADD PRIMARY KEY (account_no)');
        $this->addSql('DROP INDEX `primary` ON currency');
        $this->addSql('ALTER TABLE currency DROP id, CHANGE code currency VARCHAR(3) NOT NULL');
        $this->addSql('ALTER TABLE currency ADD PRIMARY KEY (currency)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE account ADD id INT AUTO_INCREMENT NOT NULL, DROP account_no, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
        $this->addSql('DROP INDEX `PRIMARY` ON currency');
        $this->addSql('ALTER TABLE currency ADD id INT NOT NULL, CHANGE currency code VARCHAR(3) NOT NULL');
        $this->addSql('ALTER TABLE currency ADD PRIMARY KEY (id)');
    }
}

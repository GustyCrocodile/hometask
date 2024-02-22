<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240222170053 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE transaction (id INT AUTO_INCREMENT NOT NULL, creditor_id INT NOT NULL, debtor_id INT NOT NULL, amount INT NOT NULL, description VARCHAR(255) NOT NULL, booking_date DATETIME NOT NULL, INDEX IDX_723705D1DF91AC92 (creditor_id), INDEX IDX_723705D1B043EC6B (debtor_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE transaction ADD CONSTRAINT FK_723705D1DF91AC92 FOREIGN KEY (creditor_id) REFERENCES account (id)');
        $this->addSql('ALTER TABLE transaction ADD CONSTRAINT FK_723705D1B043EC6B FOREIGN KEY (debtor_id) REFERENCES account (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE transaction DROP FOREIGN KEY FK_723705D1DF91AC92');
        $this->addSql('ALTER TABLE transaction DROP FOREIGN KEY FK_723705D1B043EC6B');
        $this->addSql('DROP TABLE transaction');
    }
}

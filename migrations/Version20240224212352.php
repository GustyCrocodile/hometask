<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240224212352 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE account ADD currency_id VARCHAR(3) NOT NULL');
        $this->addSql('ALTER TABLE account ADD CONSTRAINT FK_7D3656A438248176 FOREIGN KEY (currency_id) REFERENCES currency (currency)');
        $this->addSql('CREATE INDEX IDX_7D3656A438248176 ON account (currency_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE account DROP FOREIGN KEY FK_7D3656A438248176');
        $this->addSql('DROP INDEX IDX_7D3656A438248176 ON account');
        $this->addSql('ALTER TABLE account DROP currency_id');
    }
}

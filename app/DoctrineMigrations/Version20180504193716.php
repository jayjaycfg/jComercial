<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180504193716 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE contrato DROP FOREIGN KEY FK_66696523F04F795F');
        $this->addSql('DROP INDEX IDX_66696523F04F795F ON contrato');
        $this->addSql('ALTER TABLE contrato CHANGE factura_id facturas_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE contrato ADD CONSTRAINT FK_666965231C55BE39 FOREIGN KEY (facturas_id) REFERENCES factura (id)');
        $this->addSql('CREATE INDEX IDX_666965231C55BE39 ON contrato (facturas_id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE contrato DROP FOREIGN KEY FK_666965231C55BE39');
        $this->addSql('DROP INDEX IDX_666965231C55BE39 ON contrato');
        $this->addSql('ALTER TABLE contrato CHANGE facturas_id factura_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE contrato ADD CONSTRAINT FK_66696523F04F795F FOREIGN KEY (factura_id) REFERENCES factura (id)');
        $this->addSql('CREATE INDEX IDX_66696523F04F795F ON contrato (factura_id)');
    }
}

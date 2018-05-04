<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180504195457 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE contrato DROP FOREIGN KEY FK_666965231C55BE39');
        $this->addSql('DROP INDEX IDX_666965231C55BE39 ON contrato');
        $this->addSql('ALTER TABLE contrato DROP facturas_id');
        $this->addSql('ALTER TABLE factura ADD contrato_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE factura ADD CONSTRAINT FK_F9EBA00970AE7BF1 FOREIGN KEY (contrato_id) REFERENCES contrato (id)');
        $this->addSql('CREATE INDEX IDX_F9EBA00970AE7BF1 ON factura (contrato_id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE contrato ADD facturas_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE contrato ADD CONSTRAINT FK_666965231C55BE39 FOREIGN KEY (facturas_id) REFERENCES factura (id)');
        $this->addSql('CREATE INDEX IDX_666965231C55BE39 ON contrato (facturas_id)');
        $this->addSql('ALTER TABLE factura DROP FOREIGN KEY FK_F9EBA00970AE7BF1');
        $this->addSql('DROP INDEX IDX_F9EBA00970AE7BF1 ON factura');
        $this->addSql('ALTER TABLE factura DROP contrato_id');
    }
}

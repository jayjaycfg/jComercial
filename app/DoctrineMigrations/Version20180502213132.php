<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180502213132 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, last_name VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json_array)\', UNIQUE INDEX UNIQ_8D93D6495E237E06 (name), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contrato (id INT AUTO_INCREMENT NOT NULL, no_de_orden INT NOT NULL, tipo_de_contrato LONGTEXT NOT NULL COMMENT \'(DC2Type:json_array)\', valor_inicial_mn INT NOT NULL, valor_inicial_cuc INT NOT NULL, is_suplemento TINYINT(1) NOT NULL, acta_de_firmado VARCHAR(255) NOT NULL, fecha_de_otorgamiento DATETIME NOT NULL, fecha_de_vencimiento DATETIME NOT NULL, telefono INT NOT NULL, correo VARCHAR(255) NOT NULL, is_cliente TINYINT(1) NOT NULL, is_proveedor TINYINT(1) NOT NULL, ministerio LONGTEXT NOT NULL COMMENT \'(DC2Type:json_array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contrato_empresa (contrato_id INT NOT NULL, empresa_id INT NOT NULL, INDEX IDX_5B6161A570AE7BF1 (contrato_id), INDEX IDX_5B6161A5521E1991 (empresa_id), PRIMARY KEY(contrato_id, empresa_id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE factura (id INT AUTO_INCREMENT NOT NULL, usuario_id INT DEFAULT NULL, contrato_id INT DEFAULT NULL, empresa_id INT DEFAULT NULL, programa VARCHAR(255) NOT NULL, descripcion_del_gasto LONGTEXT NOT NULL, cantidad INT NOT NULL, precio INT NOT NULL, participante VARCHAR(255) NOT NULL, fecha_at DATETIME NOT NULL, is_cancelada TINYINT(1) NOT NULL, explicacion_por_cancelada LONGTEXT NOT NULL, INDEX IDX_F9EBA009DB38439E (usuario_id), INDEX IDX_F9EBA00970AE7BF1 (contrato_id), INDEX IDX_F9EBA009521E1991 (empresa_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE empresa (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, domicilio_legal LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE contrato_empresa ADD CONSTRAINT FK_5B6161A570AE7BF1 FOREIGN KEY (contrato_id) REFERENCES contrato (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE contrato_empresa ADD CONSTRAINT FK_5B6161A5521E1991 FOREIGN KEY (empresa_id) REFERENCES empresa (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE factura ADD CONSTRAINT FK_F9EBA009DB38439E FOREIGN KEY (usuario_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE factura ADD CONSTRAINT FK_F9EBA00970AE7BF1 FOREIGN KEY (contrato_id) REFERENCES contrato (id)');
        $this->addSql('ALTER TABLE factura ADD CONSTRAINT FK_F9EBA009521E1991 FOREIGN KEY (empresa_id) REFERENCES empresa (id)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE factura DROP FOREIGN KEY FK_F9EBA009DB38439E');
        $this->addSql('ALTER TABLE contrato_empresa DROP FOREIGN KEY FK_5B6161A570AE7BF1');
        $this->addSql('ALTER TABLE factura DROP FOREIGN KEY FK_F9EBA00970AE7BF1');
        $this->addSql('ALTER TABLE contrato_empresa DROP FOREIGN KEY FK_5B6161A5521E1991');
        $this->addSql('ALTER TABLE factura DROP FOREIGN KEY FK_F9EBA009521E1991');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE contrato');
        $this->addSql('DROP TABLE contrato_empresa');
        $this->addSql('DROP TABLE factura');
        $this->addSql('DROP TABLE empresa');
    }
}
